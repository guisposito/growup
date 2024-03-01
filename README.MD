Compile tailwindCSS
npx tailwindcss -i ./src/css/input.css -o ./dist/css/output.css --watch


meu-tema/
├── node_modules/      (bibliotecas do Node.js instaladas)
├── src/               (arquivos de origem do tema)
│   ├── css/           (arquivos CSS personalizados)
│   ├── js/            (arquivos JavaScript personalizados)
│   ├── scss/          (arquivos SCSS)
│   ├── img/           (imagens)
│   └── ...
├── dist/              (arquivos compilados e otimizados)
│   ├── css/           (arquivos CSS compilados)
│   ├── js/            (arquivos JavaScript compilados)
│   ├── img/           (imagens otimizadas)
│   └── ...
├── functions.php      (arquivo de funções do tema)
├── style.css          (arquivo de estilo principal do tema)
├── package.json       (arquivo de configuração do Node.js)
├── package-lock.json  (arquivo de bloqueio de versão do Node.js)
└── webpack.config.js  (arquivo de configuração do Webpack)