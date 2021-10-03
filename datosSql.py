import json
base=open("D:\Descargas\datos_abiertos_covid19/211001COVID19MEXICO.csv","r")
baseLeerLinea=base.readlines()

#mujer,hombre,nospeci
sexoT=[0,0,0]

entidadResT={36:0,97:0,98:0,99:0}
municipioResT={}


for x in range(1,33):
	entidadResT[x]=0
	municipioResT[x]={}


muni=open("muncipios.txt","r")
for muni in muni.readlines():
	munItem=muni.split("\t")
	numEntidad=int(munItem[2].replace("\n",""))
	municipioResT[numEntidad]={}
	for x in range(int(munItem[0]),int(munItem[1])):
		municipioResT[numEntidad][x]=0
	municipioResT[numEntidad][999]=0


edadT={}
for x in range(0,150):
	edadT[x]=0


embarazoT=[0,0,0]
diabetisT = [0,0,0]
epocT = [0,0,0]
asmaT = [0, 0, 0]
hipertensionT = [0, 0, 0]
cardioT = [0,0,0]
obesidadT = [0,0,0]
tabaquismoT = [0,0,0]
muertesT= [0,0]
fechaM = "9999-99-99"
resultados=[0,0,0]


for x in baseLeerLinea:
	cortar=x.split(',')
	if(cortar[35]=="7" or cortar[35]=="4" or cortar[35]=="5"):
		resultados[1]+=1
	else:
		if(cortar[35]=="6"):
			resultados[2]+=1
		else:
			resultados[0]+=1

		sexo=cortar[5]
		hipertension = cortar[24]
		cardio = cortar[26]
		obesidad = cortar[27]
		tabaquismo = cortar[29]
		epoc = cortar[21]
		muertes = cortar[12].replace('"',"")
		diabetis = cortar[20]

		if sexo=="1":sexoT[0]+=1
		elif  sexo=="2":sexoT[1]+=1
		elif sexo=="99":sexoT[2]+=1
		else:pass

		if hipertension == "1": hipertensionT[0] += 1
		elif hipertension == "2": hipertensionT[1] += 1
		elif hipertension == "99": hipertensionT[2] += 1
		else: pass

		if cardio == "1": cardioT[0] += 1
		elif cardio == "2": cardioT[1] += 1
		elif cardio == "99": cardioT[2] += 1
		else: pass
		
		if obesidad == "1": obesidadT[0] += 1
		elif obesidad == "2": obesidadT[1] += 1
		elif obesidad == "99": obesidadT[2] += 1
		else: pass

		if tabaquismo == "1": tabaquismoT[0] += 1
		elif tabaquismo == "2": tabaquismoT[1] += 1
		elif tabaquismo == "99": tabaquismoT[2] += 1
		else: pass

		if epoc == "1": epocT[0] += 1
		elif epoc == "2": epocT[1] += 1
		elif epoc == "99": epocT[2] += 1
		else: pass

		if diabetis == "1": diabetisT[0] += 1
		elif diabetis == "2": diabetisT[1] += 1
		elif diabetis == "99": diabetisT[2] += 1
		else: pass

		if muertes == fechaM: muertesT[0] += 1
		elif muertes != fechaM : muertesT[1] += 1
		else: pass

		
		#-------------
		embarazo=cortar[17]
		if embarazo=="1":embarazoT[0]+=1
		elif embarazo=="2":embarazoT[1]+=1
		else:embarazoT[2]+=1


		#-------------
		asma=cortar[22]
		if asma=="1":asmaT[0]+=1
		elif asma=="2":asmaT[1]+=1
		else:asmaT[2]+=1

		entidadResT[int(cortar[7].replace('"',""))]+=1
		try:
			municipioResT[int(cortar[7].replace('"',""))][int(cortar[8].replace('"',""))]+=1
		except Exception as e:
			municipioResT[int(cortar[7].replace('"',""))][999]+=1
		#-------------
		edadT[int(cortar[15])]+=1





print("\n\nsexoT\n")
print(sexoT)
print("\n\nentidadResT\n")
print(entidadResT)
print("\n\nedadT\n")
print(edadT)
print("\n\nasmaT\n")
print (asmaT)
print("\n\nembarazoT\n")
print (embarazoT)
print("\n\nmunicipioResT\n")
print (municipioResT)

print("\n\ndiabetisT\n")
print(diabetisT)
print("\n\nepocT\n")
print(epocT)
print("\n\nasmaT\n")
print(asmaT)
print("\n\nhipertensionT\n")
print(hipertensionT)
print("\n\ncardioT\n")
print(cardioT)
print("\n\nobesidadT\n")
print(obesidadT)
print("\n\ntabaquismoT\n")
print(tabaquismoT)
print("\n\nmuertesT\n")
print(muertesT)

print("\n\nresultadosT\n")
print(resultados)


print("\n\nmunicipioResTJson\n")
print (json.dumps(municipioResT))