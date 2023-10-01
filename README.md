` `**Parte 1 - Instalação e Configuração do XAMPP**

Este guia irá ajudá-lo a baixar, instalar e configurar o XAMPP para executar uma aplicação web.

1\. Baixe o XAMP:

Vá para o site oficial do XAMPP em [https://www.apachefriends.org](https://www.apachefriends.org) e baixe a versão mais recente do XAMPP para o seu sistema operacional (Windows, Linux ou macOS).

2\. Instale o XAMPP:

`   `- Windows: 

`     `- Execute o instalador que você baixou.

`     `- Durante a instalação, você pode ser solicitado a desativar o UAC (Controle de Conta de Usuário) para evitar conflitos; é recomendável seguir essa sugestão.

`     `- Siga as instruções do assistente de instalação.

`   `- macOS: 

`     `- Abra o arquivo DMG e arraste o XAMPP para a pasta de Aplicativos.

`   `- Linux: 

`     `- Torne o instalador executável com o comando: `chmod 755 xampp-linux-\*-installer.run`

`     `- Execute o instalador com: `sudo ./xampp-linux-\*-installer.run`

3\. Inicie o XAMPP:

`   `- Windows e macOS: 

`     `- Abra o painel de controle do XAMPP através do menu Iniciar ou Launchpad.

`   `- Linux: 

`     `- Use o comando: `sudo /opt/lampp/lampp start`

4\. Acesse o painel de controle:

`   `Com o XAMPP em execução, abra o seu navegador e digite `http://localhost`. Isso deve levá-lo à página inicial do XAMPP, onde você pode ver o status dos serviços e acessar diversas ferramentas como phpMyAdmin.

5\. Configurando sua aplicação:

`   `- Coloque sua aplicação ou site no diretório `htdocs` dentro do diretório principal do XAMPP. Por exemplo, se você tem uma aplicação chamada "meusite", você deve colocá-la em `xampp/htdocs/meusite`.

`   `- Acesse sua aplicação no navegador usando `http://localhost/meusite`.

**Parte 2 - Download e Instalação da Versão 1.1 do Yii Framework**

Motivo para escolher a versão 1.1:

É importante observar que optei por utilizar a versão 1.1 do Yii em vez da versão 2.0 devido a problemas encontrados nesta última. Assim, recomendo fortemente a adesão à versão 1.1 para garantir a estabilidade e segurança do seu projeto.

1\. Acesse o site oficial de downloads do Yii:

`   `Abra seu navegador e vá para [https://www.yiiframework.com/download](https://www.yiiframework.com/download).

2\. Localize a seção da versão 1.1:

`   `Role a página até encontrar a seção dedicada à versão 1.1 do Yii.

3\. Baixe o código fonte:

`   `Procure pelo link "Source Code (.zip)" abaixo das informações da versão 1.1. Clique neste link para iniciar o download do arquivo ZIP.

4\. Extraia os arquivos:

`   `Após o download, localize o arquivo ZIP em seu computador e extraia os arquivos para um diretório de sua escolha. Isso será a base para iniciar sua aplicação usando o Yii 1.1.

**Parte 3 - Migrando Arquivos da Pasta "Contatos" para "htdocs" do XAMPP**

Pré-requisitos:

\- Ter o XAMPP instalado no seu computador.

1\. Localize a Pasta "Contatos:

`   `- Navegue até o local onde a pasta "Contatos" está no seu sistema após o download do repositório Git Hub. Por exemplo, pode ser algo como `C:\Users\Downloads\Contatos`.

2\. Mova os Arquivos para "htdocs":

`   `- Selecione todos os arquivos e subpastas dentro da pasta "Contatos".

`   `- Copie (CTRL+C) ou corte (CTRL+X) os itens selecionados.

`   `- Navegue até a pasta "htdocs" do XAMPP. Geralmente, ela está localizada em:

`     `- Windows: `C:\xampp\htdocs`

`     `- macOS: `/Applications/XAMPP/htdocs`

`     `- Linux: `/opt/lampp/htdocs`

`   `- Cole (CTRL+V) os arquivos e pastas copiados/cortados aqui.

3\. Abra o XAMPP Control Panel:

`   `- Windows: 

`     `- Você pode abrir o XAMPP Control Panel a partir do Menu Iniciar ou pelo ícone na Área de Trabalho, caso tenha criado um atalho durante a instalação.

`   `- macOS:

`     `- Abra o XAMPP a partir do Launchpad ou da pasta Aplicativos.

`   `- Linux: 

`     `- Em algumas distribuições, você pode ter um atalho para o painel de controle do XAMPP, ou você pode precisar iniciá-lo manualmente a partir do terminal.

4\. Inicie o Apache e o MySQL:

`   `- No XAMPP Control Panel, você verá uma lista de serviços. Localize "Apache" e "MySQL".

`   `- Clique no botão "Start" ao lado de "Apache".

`   `- Faça o mesmo para "MySQL".

`   `Assim que ambos estiverem rodando, os indicadores de status ao lado deles ficarão verdes, indicando que estão ativos.

5\. Acesse a Aplicação:

`   `Abra um navegador e digite `http://localhost/` seguido pelo nome da pasta ou arquivo que você transferiu. Se você moveu uma pasta chamada "Contatos" para "htdocs", por exemplo, você acessaria via `http://localhost/Contatos`. Após acessar a pasta geral com os arquivos, segue orientação para acessar o endereço funcional da aplicação.

Com o navegador aberto, digite o endereço web a seguir:  <http://localhost/Contatos/web/index.php?r=contatos%2Findex>

Com esse endereço, a página inicial da aplicação será aberta e, a partir dela, todas as outras podem ser acessadas.
