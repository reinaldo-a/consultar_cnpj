# Consultar CNPJ

Este projeto é uma aplicação PHP para consulta de CNPJ.

## Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em sua máquina:

- PHP (>= 7.4)
- Composer

## Instalação

### Passo 1: Clonar o Repositório

Clone este repositório em sua máquina local usando o seguinte comando:

```bash
git clone git@github.com:reinaldo-a/consultar_cnpj.git
```
### Passo 2: Navegar até o Diretório do Projeto

Navegue até o diretório do projeto:

```bash
cd consultar_cnpj
```

### Passo 3: Instalar o Composer

Se você ainda não tem o Composer instalado, siga estas etapas:

1. **Baixar o instalador do Composer:**

    ```bash
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
    ```

2. **Verificar o instalador (opcional):**

    ```bash
    php -r "if (hash_file('sha384', 'composer-setup.php') === '906a3f26be61e2dd2c2bd6b77e8f9a8882c6e9c8ec533ab0e9e1d8b18badd3f3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
    ```

3. **Instalar o Composer:**

    ```bash
    php composer-setup.php
    ```

4. **Remover o instalador:**

    ```bash
    php -r "unlink('composer-setup.php');"
    ```

5. **Mover o Composer para um diretório acessível globalmente:**

    ```bash
    sudo mv composer.phar /usr/local/bin/composer
    ```
### Passo 4: Instalar as Dependências

Dentro do diretório do projeto, execute o seguinte comando para instalar as dependências:

```bash
composer install
```


