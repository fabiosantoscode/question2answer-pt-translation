<?php
	
/*
	Question2Answer 1.4.1 (c) 2011, Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: 1.4.1
	Date: 2011-07-10 06:58:57 GMT
	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "Sua resposta no ^site_title tem um novo comentário por ^c_handle:\n\n^open^c_content^close\n\nSua resposta foi:\n\n^open^c_context^close\n\nVocê pode responder adicionando um comentário:\n\n^url\n\nObrigado,\n\n^site_title",
		'a_commented_subject' => 'Sua resposta no ^site_title tem um novo comentário',
		'a_followed_body' => "Sua resposta no ^site_title tem uma nova pergunta relacionada por ^q_handle:\n\n^open^q_title^close\n\nSua resposta foi:\n\n^open^a_content^close\n\nClique a seguir para responder:\n\n^url\n\nObrigado,\n\n^site_title",
		'a_followed_subject' => 'Sua resposta no ^site_title tem uma nova questão relacionada',
		'a_selected_body' => "Parabéns! Sua resposta no ^site_title foi selecionada como a melhor por ^s_handle:\n\n^open^a_content^close\n\nA pergunta foi:\n\n^open^q_title^close\n\nClique a seguir para responder:\n\n^url\n\nObrigado,\n\n^site_title",
		'a_selected_subject' => 'Sua resposta no ^site_title foi selecionada!',
		'c_commented_body' => "Um novo comentário por ^c_handle foi adicionado após o seu comentário no ^site_title:\n\n^open^c_content^close\n\nA discussão é a seguinte:\n\n^open^c_context^close\n\nVocê pode responder adicionando outro comentário:\n\n^url\n\nObrigado,\n\n^site_title",
		'c_commented_subject' => 'Seu comentário no ^site_title foi adicionado',
		'confirm_body' => "Por favor clique abaixo para confirmar seu endereço de email para ^site_title.\n\n^url\n\nObrigado,\n^site_title",
		'confirm_subject' => '^site_title - Confirmação do endereço de email',
		'feedback_body' => "Comentários:\n^message\n\nNome:\n^name\n\nEmail:\n^email\n\nPágina anterior:\n^previous\n\nUsuários:\n^url\n\nIP:\n^ip\n\nBrowser:\n^browser",
		'feedback_subject' => '^ opinião',
		
		'flagged_body' => "Um post por ^p_handle recebeu^flags:\n\n^open^p_context^close\n\nClique no link a seguir para ver:\n\n^url\n\nThank you,\n\n^site_title",
		'flagged_subject' => '^site_title foi marcado como flag',
		
		'new_password_body' => "^Sua nova senha para o ^site_title está abaixo.\n\nSenha: ^password\n\nRecomendamos mudar sua senha após o primeiro login.\n\nObrigado,\n^site_title\n^url",
		'new_password_subject' => '^site_title - Sua nova senha',
		
		'private_message_body' => "Você enviou uma mensagem privada por ^f_handle em ^site_title:\n\n^open^message^close\n\n^moreObrigado,\n\n^site_title\n\n\nPara bloquear mensagens privadas, edite seu perfil:\n^a_url",
		'private_message_info' => "Mais informações sobre ^f_handle:\n\n^url\n\n",
		'private_message_reply' => "Clique a seguir para responder para ^f_handle através de uma mensagem privada:\n\n^url\n\n",
		'private_message_subject' => 'Mensagem de ^f_handle no ^site_title',
		
		'q_answered_body' => "Sua pergunta no ^site_title foi respondida por ^a_handle:\n\n^open^a_content^close\n\nSuas perguntas são:\n\n^open^q_title^close\n\nSe você gostou dessa resposta, você pode selecioná-la como a melhor:\n\n^url\n\nObrigado,\n\n^site_title",
		'q_answered_subject' => 'Sua pergunta no ^site_title foi respondida',
		'q_commented_body' => "Sua pergunta no ^site_title tem um novo comentário realizado por ^c_handle:\n\n^open^c_content^close\n\nSua pergunta foi:\n\n^open^c_context^close\n\nVocê pode respondê-la adicionando um novo comentário:\n\n^url\n\nObrigado,\n\n^site_title",
		'q_commented_subject' => 'Sua pergunta no ^site_title question tem um novo comentário',
		'q_posted_body' => "Uma nova pergunta foi realizada por ^q_handle:\n\n^open^q_title\n\n^q_content^close\n\nClique a seguir para ver a pergunta:\n\n^url\n\nObrigado,\n\n^site_title",
		'q_posted_subject' => '^site_title tem uma nova pergunta',
		
		'reset_body' => "Clique abaixo para redefinir sua senha no ^site_title.\n\n^url\n\nAlternativamente, digite o código abaixo no campo indicado.\n\nCódigo: ^code\n\nSe você não pediu para redefinir sua senha, ignore esta mensagem.\n\nObrigado,\n^site_title",
		'reset_subject' => '^site_title - Redefinir senha',
		'welcome_body' => "Obrigado por se cadastrar no ^site_title.\n\n^custom^confirm\nSeguem as informações do seu login:\n\nEmail: ^email\nSenha: ^password\n\nPor favor mantenha esta informação segura, para referencia futura.\n\nObrigado,\n\n^site_title\n^url",
		'welcome_confirm' => "Por favor clique abaixo para confirmar seu endereço de email.\n\n^url\n\n",
		'welcome_subject' => 'Bem vindo ao ^site_title!',
		'moderate_body' => "Um post de ^p_handle requer a sua aprovação:\n\n^open^p_context^close\n\nClique abaixo para aprovar ou rejeitar o post:\n\n^url\n\nObrigado,\n\n^site_title",
		'moderate_subject' => "Moderação ^site_title",
		'to_handle_prefix' => "^,\n\n",
);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/
