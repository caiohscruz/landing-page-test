![](https://github.com/caiohscruz/landing-page-test/blob/master/images/landing-page.gif?raw=true)

# Projeto

Elaborar uma landing page responsiva para anúncio de uma Smart TV LED Samsung com um campo de texto para o visitante cadastrar o e-mail e receber promoções.

Utilizando AJAX, fazer a validação do e-mail. Caso não seja válido, exibir uma mensagem pedindo pra entrar com um email válido. E caso seja válido, cadastrar num banco de dados MySQL (também por AJAX).

Fazer também uma página onde os e-mails cadastrados possam ser visualizados (Conferir [Repositório](https://github.com/caiohscruz/landing-page-test-list-emails) e [Deploy](https://list-emails-smart-tv-samsung.herokuapp.com/)).


# Aprendizados

Esse foi meu primeiro contato com AJAX e a última vez que mexi com PHP foi em 2018, na elaboração do meu TCC, que não foi lá grandes coisas. Considerando que tive pouquíssimo tempo para desenvolver esta aplicação, estou bastante satisfeito com os resultados. Achei muito legal fazer o menu superior responsivo, que sinaliza em que ponto estamos da página e que encolhe para se adequar a displays menores.

# Deploy

Já fiz alguns deploys de aplicações NodeJS, que tem várias detalhes que devem ser observados para funcionar, então pensei que teria problemas para fazer o de uma aplicação com PHP, mas foi muito mais simples do que imaginei, e de quebra ainda fiz uso de variáveis de ambiente para as credenciais do banco de dados, que eu nunca tinha feito com PHP até então. Caso queira conferir o resultado, [clique aqui](https://smart-tv-samsung.herokuapp.com/).

# Fontes

Retirei as imagens e textos de um [anúncio no site da Submarino](https://www.submarino.com.br/produto/1704351001?pfm_carac=smart-tv-samsung&pfm_page=search&pfm_pos=grid&pfm_type=search_page).

Para a criação do menu superior, aproveitei um template da [Start Bootstrap.](https://startbootstrap.com/theme/freelancer) Como pode ser verificado pelos commits, criei o site primeiro "no braço", mas achei que ficou muito simples e resolvi incrementar um pouco. No final das contas, acabei incrementando só com o menu superior mesmo.

A parte do AJAX, como nunca tive contato com isso antes, consultei [um site](https://rafaelcouto.com.br/validacao-de-campos-sem-refresh-com-ajax/) e aproveitei os códigos de lá, com algumas adaptações para o meu caso e porque havia comandos depreciados.

