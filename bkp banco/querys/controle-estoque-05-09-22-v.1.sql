SELECT nomePessoa,nomeProd 
FROM produto prod
INNER JOIN lancamento l on prod.codProd = l.produto_codProd
INNER JOIN pessoa p on p.codPessoa = l.pessoa_codPessoa;