# Crawler PHP para o site [pensador](https://www.pensador.com)

Um simples crawler php, que pode ser acessado como uma API, retornando uma imagem da frase mais recente do site pensador.

Exemplo de uso em HTML
```html
<img src="https://luanmarques.com.br/api/pensador/">
```
Resultado:
![Frase aleatória pensador](https://luanmarques.com.br/api/pensador/)

## Dependências
- [CodeIgniter 4](https://github.com/codeigniter4/CodeIgniter4)
- PHP 7.2^
- [Simple HTML DOM](https://github.com/voku/simple_html_dom)

## Instalação
```bash
git clone https://github.com/Luan7805/API-Pensador
cd API-Pensador
composer install
php spark serve
```
