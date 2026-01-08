# Solux Energy - WordPress Theme

## Instalação

1. Crie uma pasta chamada `solux-energy` na pasta `wp-content/themes/` do seu WordPress

2. Copie todos os arquivos para dentro dessa pasta, **removendo a extensão .txt**:
   - style.css.txt → style.css
   - functions.php.txt → functions.php
   - header.php.txt → header.php
   - footer.php.txt → footer.php
   - front-page.php.txt → front-page.php
   - index.php.txt → index.php

3. Crie as seguintes pastas dentro do tema:
   - assets/
   - assets/js/
   - assets/images/

4. Mova o arquivo main.js para assets/js/:
   - assets/js/main.js.txt → assets/js/main.js

5. Adicione as imagens necessárias em assets/images/:
   - hero-solar.jpg (imagem do hero)
   - technology-solar.jpg (imagem da seção tecnologia)
   - testimonial-1.jpg, testimonial-2.jpg, testimonial-3.jpg (fotos dos depoimentos)
   - og-image.jpg (imagem para compartilhamento em redes sociais)

## Estrutura Final de Pastas

```
solux-energy/
├── assets/
│   ├── js/
│   │   └── main.js
│   └── images/
│       ├── hero-solar.jpg
│       ├── technology-solar.jpg
│       ├── testimonial-1.jpg
│       ├── testimonial-2.jpg
│       ├── testimonial-3.jpg
│       └── og-image.jpg
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── index.php
└── README.md
```

## Configurações no WordPress

### 1. Ativar o Tema
- Vá em Aparência > Temas
- Ative o tema "Solux Energy"

### 2. Configurar o Customizer
- Vá em Aparência > Personalizar
- Configure as seções:
  - **Hero Section**: Título, subtítulo e imagem de fundo
  - **Informações de Contato**: Telefone, WhatsApp e e-mail
  - **Redes Sociais**: URLs do Instagram, Facebook, LinkedIn e YouTube

### 3. Configurar Menus
- Vá em Aparência > Menus
- Crie menus para "Menu Principal" e "Menu Rodapé"

### 4. Configurar Página Inicial
- Vá em Configurações > Leitura
- Selecione "Uma página estática"
- Escolha uma página como "Página inicial"
- O tema usará o template front-page.php automaticamente

## Funcionalidades

### Leads
- Os formulários capturam leads automaticamente
- Vá em Leads no painel admin para ver os contatos recebidos
- E-mails de notificação são enviados para o admin

### Personalização
- Todas as cores usam CSS Variables (fácil de personalizar)
- Edite o arquivo style.css na seção `:root` para alterar cores

### Animações
- Scroll reveal automático (elementos aparecem ao rolar)
- Efeitos hover em botões e cards
- Menu mobile com transição suave

## Requisitos

- WordPress 5.0+
- PHP 7.4+
- Recomendado: Plugin de cache para melhor performance

## Suporte

Para dúvidas ou customizações adicionais, entre em contato com o desenvolvedor.
