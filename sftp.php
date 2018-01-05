<?php

	include 'sftp/Net/SFTP.php';

    //IP do servidor
    $strServer = "192.168.1.1";
    //Usuário de acesso
    $strServerUsername = "user";
    //Senha de acesso
    $strServerPassword = "123";
    //Caminho do arquivo local
    $file = 'folder/test.txt';
    //Caminho do arquivo no servidor
    $remote_file = 'html/test.txt';

    $sftp = new NET_SFTP($strServer);

    //Caso esteja tudo certo, irá salvar o arquivo quando entrar no IF.
    if ($sftp->login($strServerUsername, $strServerPassword)) {
        $sftp->put($remote_file, $file, NET_SFTP_LOCAL_FILE);
    }
