# -*- coding: utf-8 -*-
"""
Created on Mon Apr 25 03:21:51 2022

@author: 56946
"""
import psycopg2 as pc

conexion = pc.connect(user="postgres",
                      password="123456",
                      host="localhost",
                      port="5432",
                      database="mibasesergio")
cursor = conexion.cursor()
sql="select avg(case when persona.coddepto='02' then inscripcion.nota_final end) LP, avg(case when persona.coddepto='03' then inscripcion.nota_final end) CB, avg(case when persona.coddepto='04' then inscripcion.nota_final end) RU, avg(case when persona.coddepto='05' then inscripcion.nota_final end) PT, avg(case when persona.coddepto='06' then inscripcion.nota_final end) TA, avg(case when persona.coddepto='07' then inscripcion.nota_final end) SC from inscripcion, persona where cast(inscripcion.ciestudiante as numeric) = persona.ci"
cursor.execute(sql)
registros = cursor.fetchall()
print(registros)
for registro in registros:
    print("lp","   Cb","  Ru","  Pt","  ta","  Sc") 
    print(round(registro[0],2),registro[1],registro[2],registro[3],registro[4],registro[5])
cursor.close()
conexion.close()
