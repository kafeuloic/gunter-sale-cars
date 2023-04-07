function test()
{
    printf "\e[1;30m\n-- Test d'envoi d'un email a un compte gmail --\e[0m\n"
    read -p "Entrer l'adresse gmail du destinataire: " gmail2
    printf "Subject: Test\n\nÇa marche yes!!\n." | sendmail $gmail2
    printf "\e[1;32mEmail envoyer ..\e[0m\n"
    printf "\nConsulter la boite email du destinataire pour verifier si le email a été envoyer\n"
}

if [[ $1 = "install" ]]; then
    # pour verifier si il est en mode super utilisateur
    if [[ $EUID -ne 0 ]]; then
        echo "Vous n'est pas en mode super utilisateur"

        # to exist the bash script
        exit 0
    fi

    ## Quelque message
    printf "\n\e[31m|--- PEREQUISE POUR UTILISER POSTFIX POUR ENVOYER UN EMAIL AVEC UN COMPTE GMAIL ----|\e[0m\n\n"
    printf "\bAvant de pouvoir utiliser postfix pour envoyer des email via un compte gmail\n"
    printf "\t1. Il faut installer \e[1mpostfix\e[0m et \e[1mlibsasl2-modules\e[0m en utilisant la commande :\n"
    printf "\t\t>> \e[34msudo apt-get update \$$ sudo apt-get install postfix libsasl2-modules\e[0m\n"
    printf "\t2. Il faut avoir un compte gmail\n"
    printf "\t3. Il faut demander a gmail de vous \e[1mgénére un mot de passe\e[0m pour vous connecter avec \e[1mpostfix\e[0m\n"
    printf "\e[31mNB\e[0m: \e[1;33mle mot de passe gmail demander ici n'ai pas le mot de pass que vous utiliser pour vous connecter a votre compte\e[0m\n"
    read -p "Voulez vous continuez.....O/N? " choix

    if [[ $choix = "O" || $choix = "o" ]]; then
        ## insertion du hostname de votre pc dans la configuration de postfix
        myhostname=$(hostname -f)
        sed -i "s/HOSTNAME/$myhostname/g" main.cf
        cp main.cf /etc/postfix/main.cf

        ## configuration pour utiliser votre addresse gmail sur postfix
        printf "\e[1;32m\n ---- INSTALLATION DE VOTRE COMPTE GMAIL DANS POSTFIX -----\e[0m \n"
        read -p "Entrer votre addresse email: " gmail
        read -p "Entrer le mot de pass générer avec ce compte gmail: " gmailPasswd

        # -d $sasls return vrai si le repertoire sasl exist deja
        if [[ -d /etc/postfix/sasl ]]; then
            echo -e "le repertoire sasl existe ...\e[32mOK\e[0m"
        else
            # creating sasl folder
            mkdir /etc/postfix/sasl
        fi

        ## creation du fichier "sasl_passwd" qui contiendra les information de votre compte gmail 
        ## et du port(587 par default) smpt utiliser dans le repertoire sasl
        echo "[smtp.gmail.com]:587 $gmail:$gmailPasswd" > /etc/postfix/sasl/sasl_passwd

        ## creation du hash db du fichier sasl_passwd
        postmap /etc/postfix/sasl/sasl_passwd
    
        ## redemarrage du service postfix
        service=/usr/bin/service
        systemctl=/usr/bin/systemctl

        if [[ -e $service ]]; then
            service postfix restart
        elif [[ -e $systemctl ]]; then
            systemctl restart postfix
        fi
        test
        printf "Si tout est okay vous pouvez maintenant envoyer des email avec du php.\n"
        printf "Pour re-utiliser le service postfix après avoir redémarrez votre ordinateur taper juste la commande:\n"
        printf "\t\e[34m>> sudo service postfix restart\e[0m ou \e[34m sudo systemctl restart postfix\e[0m"
    else
        echo -e "\e[31mINSTALLATION ARRETER\e[0m"
    fi

elif [[ $1 = "test" ]]; then
    test
fi
