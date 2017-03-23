UPDATE person t1, persona t2
SET t1.cedula = t2.cedula
WHERE t1.id = t2.idPersona;