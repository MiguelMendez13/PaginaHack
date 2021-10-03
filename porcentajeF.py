base=open("D:\Descargas\datos_abiertos_covid19/211001COVID19MEXICO.csv", "r")
baseLeer = base.readlines()

#(numerototal,fallecimientos,vivos)
diabetesC = [0,0,0]
embarazoT=[0,0,0]
diabetisT = [0,0,0]
epocT = [0,0,0]
asmaT = [0, 0, 0]
hipertensionT = [0, 0, 0]
cardioT = [0,0,0]
obesidadT = [0,0,0]
tabaquismoT = [0,0,0]
totales =0
fechaM = "9999-99-99"


for x in baseLeer:
    cortar = x.split(',')
    if(cortar[35]=="7" or cortar[35]=="4" or cortar[35]=="5"):
        
        muertes = cortar[12].replace('"',"")
        diabetes = cortar[20]
        sexo=cortar[5]
        hipertension = cortar[24]
        cardio = cortar[26]
        obesidad = cortar[27]
        tabaquismo = cortar[29]
        epoc = cortar[21]
        embarazo=cortar[17]
        asma=cortar[22]
        
       
        if (muertes == fechaM and diabetes == "1"):
            diabetesC[2] += 1
        elif muertes != fechaM and diabetes== "1":
            diabetesC[1] += 1
        else:pass

        if (diabetes == "1") :
            
            diabetesC[0] += 1
        else:pass

        if(muertes==fechaM and hipertension =="1"):
            hipertensionT[2] += 1
        elif(muertes!=fechaM and hipertension =="1"):
            hipertensionT[1] +=1
        else: pass

        if(hipertension=="1"):
            hipertensionT[0] +=1
        else:pass
        
        if (muertes == fechaM and cardio=="1"):
            cardioT[2] += 1
        elif (muertes != fechaM and cardio=="1"):
            cardioT[1] +=1
        else: pass
        if(cardio=="1"):
            cardioT[0]+=1
        else:pass

        if(muertes==fechaM and obesidad == "1"):
            obesidadT[2] += 1
        elif (muertes!=fechaM and obesidad == "1"):
            obesidadT[1] +=1
        else: pass

        if(obesidad == "1"):
            obesidadT[0] += 1
        else:pass

        if(muertes==fechaM and tabaquismo == "1"):
            tabaquismoT[2] += 1
        elif (muertes!=fechaM and tabaquismo == "1"):
             tabaquismoT[1] += 1
        
        else:pass

        if (tabaquismo == '1'):
             tabaquismoT[0] += 1
        else:pass

        if(muertes==fechaM and epoc =="1"):
            epocT[2] += 1
        elif(muertes!=fechaM and epoc =="1"):
            epocT[1] += 1
        else: pass
        if(epoc == "1"):
            epocT[0] += 1
        else:pass
        if (muertes==fechaM and asma=="1"):
            asmaT[2] +=1
        elif (muertes!=fechaM and asma=="1"):
            asmaT[1] +=1
        else: pass

        if(asma =="1"):
            asmaT[0] +=1   

        if(muertes == fechaM and embarazo == "1"):
            embarazoT[2]+=1
        elif(muertes != fechaM and embarazo == "1"):  
            embarazoT[1]+=1
        else:pass

        if embarazo == "1":
            embarazoT[0]+=1
    



        

print (diabetesC)
print("diabetes",100*diabetesC[1]/diabetesC[0],'%',"Muertes ",100*diabetesC[2]/diabetesC[0],'% vivos' )
print(hipertensionT)
print("hipertension",100*hipertensionT[1]/hipertensionT[0],'%',"Muertes ",100*hipertensionT[2]/hipertensionT[0],'% vivos' )
print(cardioT)
print("cardiovasculares",100*cardioT[1]/cardioT[0],'%',"Muertes ",100*cardioT[2]/cardioT[0],'% vivos' )
print(obesidadT)
print("obesidad",100*obesidadT[1]/obesidadT[0],'%',"Muertes ",100*obesidadT[2]/obesidadT[0],'% vivos' )
print(tabaquismoT)
print("tabaquismo",100*tabaquismoT[1]/tabaquismoT[0],'%',"Muertes ",100*tabaquismoT[2]/tabaquismoT[0],'% vivos' )
print(epocT)
print("epoc",100*epocT[1]/epocT[0],'%',"Muertes ",100*epocT[2]/epocT[0],'% vivos' )
print(asmaT)
print("asma",100*asmaT[1]/asmaT[0],'%',"Muertes ",100*asmaT[2]/asmaT[0],'% vivos' )
print(embarazoT)
print("embarazo",100*embarazoT[1]/embarazoT[0],'%',"Muertes ",100*embarazoT[2]/embarazoT[0],'% vivos' )


