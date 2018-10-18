<?php
    namespace MonNamespace { // Déclaration du namespace

        // Toute les constantes, fonctions et clasess déclarées ici
        // feront partie du namespace 'MonNamespace'
        function strlen() {
            echo 'Hello World !';
        }
        namespace\strlen(); // CE namespace
        strlen(); // CE namespace
        echo \strlen("Hello World !"); // Global Namespace
        echo __NAMESPACE__;
    }

    namespace {
        // Le code contenu dans ce namespace fera partie du namespace global.
        echo "<br/>".strlen('Hello world dans namespace Global!');
        echo __NAMESPACE__;
        MonNamespace\Subnamespace\essai();
    }
    namespace MonNamespace\Subnamespace {
        echo __NAMESPACE__;
        function essai(){echo "ESSAI";};
        strlen("ddsdsdsdsdddsdsdsdsdddsdsdsdsd");
    }
    namespace { // Retour au Global
        require 'F.ns.php';
        use A\B\C\D\E\F as nsF;
        // Se transforme en A\B\C\D\E\F\getNamespace().
        nsF\getNamespace();
    }

?>