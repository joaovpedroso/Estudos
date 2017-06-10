

SELECT * FROM tipo where id = (SELECT id FROM curso WHERE tipo_id = .$tipo);