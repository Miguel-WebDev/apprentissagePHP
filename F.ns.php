<?php
namespace A\B\C\D\E\F;
    function getNamespace() {
        echo __NAMESPACE__;
    }
namespace NomTresLongExpresARallongePourAlias;
        function getNamespace() {
            echo __NAMESPACE__;
        }

        // Pour importation de CLASS via USE
        class MaClasse {
            public function hello() {
                echo '<br/>Salut les Terriens !<br/>';
            }
        }
    }
?>