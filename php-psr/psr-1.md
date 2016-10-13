# PSR

## PSR-1: Padrão de codificação básica

### Arquivos

+ Tags <?php ?> para blocos de códigos e tags <?= ?> para códigos inline ou echo;
+ Codificação UTF-8;
+ Se você tem um arquivo de classe, defina apenas a classe, seus métodos, variáveis e constantes. 
Se tem um arquivo que gera output (exibe conteúdo na tela), faça  com que ele apenas gere o output.


### Classes e namespace

+ Nome das classes e namespace deve seguir a PSR-0 para o autoload mais eficaz;
+ Classes devem seguir o estilo StudlyCaps (VendorModelFoo ou Vendor_Model_Foo)


### Constantes, propriedade e métodos

+ Constantes devem seguir o estilo UpperCase com underline (VERSAO, DATA_APPROVACAO)
+ Propriedades devem seguir o estilo camelCase ou under_score ($notaValida, $nota_valida)
+ Métodos devem seguir o estilo camelCase (function atribuirNota() {})