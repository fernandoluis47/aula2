<?php

/* Criar variáveis
$nomeDaVariavel = conteúdo;
Regras :
- inicializar com $ 
- Não pode começar por número
- utilizar o tratamento CamelCase
- Não pode ter acentos, espaços, símbolos *(_ + # @ ! >)

1bim - errado
$bim1 = 7.5; -  certo
$nome do aluno = "Juan"; - Errado
$nomedoaluno = "Juan Pablo"; - é correto mas não tá certo
$nomeDoAluno = "Márcia";
*/

$bim1 = 8.2;
$nome = "Luis Fernandoo";
$idade = 23;
$profissao = "motoboy";
$salario = 3000.00;

#comando de saída de tela

echo "{$bim1} <br>";
echo $nome;

/* linha de comentário*/

# Comentário de linha única

echo "Me chamo {$nome} tenho {$idade} sou {$profissao} e ganho R$ {$salario}";