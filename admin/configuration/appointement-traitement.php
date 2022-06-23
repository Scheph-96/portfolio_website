<?php
    include 'accounts_administration.php';

    if ($_POST['divID'] != "") {
        seen();
        $result = get_email_by_id();
    
        echo $result;
    } elseif ($_POST['email'] != "" && $_POST['message'] != "") {
        $result = send_email();

        echo $result;
    }

    /*
    some subject
        Hi,

saodfawoiej waefknewao waenfoiawer waefnowaie. waklefoaw woerfwao werfkwja,f wneaofwoi wfrefnwoire wfreoafi alesfaewif awefawiofwae. fwaerhfiowerf awirehnforwa waerwoi awfifiouw faweiufaewroifwa fiwueioewrf aweifiuwer,m awrefjaweroifj aewroifoiwe awfeweoirfj asfoihwairef aesfwaoiefw waoiefwoie. oasijjfawoijf weofwifweaof.

Yours sincerely.
    */
    

?>