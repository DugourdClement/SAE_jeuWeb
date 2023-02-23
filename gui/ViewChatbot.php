<?php
include_once "View.php";

class ViewChatbot extends View
{

    public function __construct($layout)
    {
        parent::__construct($layout);

        $this->title = 'Chatbot';

        $this->content = '
            <script src="https://unpkg.com/@babel/polyfill@7.6.0/dist/polyfill.min.js"></script>
            <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
            <script src="js/conversation.js"></script>
            <script type="text/babel" data-presets="es2015,es2016,es2017" src="js/chatbot.js"></script>
            
            <header class="text-center">
                <h1 class="xl reset-margin large-margin">CHATBOT</h1>
                <p>Avez-vous besoin d \'aide ? </p>
                <p>Promis, je suis un humain et je suis là pour vous proposez des oeuvres si vous souhaitez vous renseigner sur des
                    sujets que nous avons abordé dans notre serious game. Veuillez sélectionner une réponse à chaque question
                    posée.</p>
            </header>
            
            <main id="main">
                <div id="chatbot-container">
                    <div id="chatbot-inner">
                        <div id="chatbot"></div>
                    </div>
                </div>
            </main>';
        }
}