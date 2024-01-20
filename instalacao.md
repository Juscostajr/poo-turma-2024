# Guia Rápido de Instalação

## Instalação do Chocolatey
### Finalidade
Chocolatey é um gerenciador de pacotes para sistemas operacionais Windows, que simplifica o processo de instalação, atualização e remoção de software. 
Ele utiliza uma abordagem baseada em linha de comando para automatizar tarefas relacionadas a pacotes de software, permitindo que os usuários instalem e gerenciem programas de forma eficiente.

### Observação
Caso utilize Linux você poderá utilizar o gerenciador de pacotes da sua distribuição Linux. (apt, yum, apk)

### Passo 1
Abra o Windows Power Shell **como administrador**.
![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/44ef42db-eacf-4de3-a434-9d447ed829cd)

### Passo 2
Cole o comando abaixo no seu prompt Power Shell.
```
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
```
![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/cc335847-ab86-4872-8f00-ea5190ee236d)

### Passo 3
Após a execução da instalação digite **choco** e pressione enter. Caso a instalação tenha sido bem sussedida, o resultado deverá ser similar ao abaixo:

![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/0035b14b-4502-4e9c-ad67-477e95eed3c1)

### Problemas Comuns
- Verifique sua conexão com a internet.
- Caso tenha executado o Windows PowerShell sem permissão de administrador, feche o PowerShell abra novamente como administrador (Passo 1).
  Cole o comando abaixo:
  ```
  Remove-Item -Path C:\ProgramData\chocolatey -Recurse -Force
  ```
  Volte ao Passo 2.

## Instalação do PHP

O Composer é um gerenciador de dependências e pacotes para PHP, projetado para facilitar o processo de integração de bibliotecas e frameworks em projetos PHP. 

### Passo 1
Cole o comando abaixo no Windows PowerShell aberto como administrador:
```
choco install php --version 8.3.2 -y
```
![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/694fad1f-78d5-4785-a56b-1d4645ce85fc)

### Passo 2
Ainda com o PowerShell aberto, cole o seguinte comando:
```
choco install composer --version 6.3.0 -y
```
![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/60cf663b-8261-4cdf-8152-ffcf2f4935dc)

## Instalação do Visual Studio Code
Com o PowerShell aberto como administrador, cole o seguinte comando:
```
choco install vscode -y
```
![image](https://github.com/Juscostajr/poo-turma-2024/assets/23126266/d21723e8-e72c-454f-a7e5-600655b56b4d)
