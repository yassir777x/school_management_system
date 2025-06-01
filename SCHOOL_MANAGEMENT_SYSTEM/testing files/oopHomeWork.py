class Employe:
    
    def __init__(self, m, n, s, p):
        self.matricule = m
        self.nom = n
        self.salaire = s
        self.permanent = p

    def AfficherInfo(self):
        print(
            f"""
la matricule de l'employe est : {self.matricule}
le nom de l'employe est : {self.nom}
la salaire de l'employe est : {self.salaire}
l'employe est {'permanent' if self.permanent else 'non permanent '}
                 """
        )

ListOfEmploye = []

# Print les choix
def printLesChoix():
    print("1 - ajouter\n2 - rechercher\n3 - modifier\n4 - supprimer\n0 - quitter")

#get object

def getObject(matObj):
    objModifier = None
    for i in ListOfEmploye:
        if i.matricule == matObj:
            objModifier = i
            break
    return objModifier

def checkMatricule(mat) :
    matriculeExit = True
    if len(ListOfEmploye) != 0:
        while matriculeExit:
            for i in ListOfEmploye:
                if i.matricule == mat:
                    matriculeExit = True
                    mat = int(input("se matricule est exist entrer un autre : "))
                    break
                else:
                    matriculeExit = False

# Ajouter une employe dans la list
def addEmploye():
    mat = int(input("Entrer la matricule : "))
    checkMatricule(mat)
    name = input("Saisir le nom d'employe : ")
    sal = float(input("Saisir la salaire d'employe : "))
    estPer = input("si l'employe est permanent oui/non : ").strip().lower()
    while estPer not in ['oui' , 'non']:
        estPer = input("please entrer oui ou non : ").strip().lower()

    ListOfEmploye.append(Employe(mat, name, sal, estPer == 'oui'))
    print("\nL'employé a été ajouté avec succès. \n")

# rechercher une employe dans la list
def rechercheEmploye():
    matRechercher = int(input("Entrer la matricule de l'employe recherche : "))
    employe = getObject(matRechercher)
    if employe is None :
        print("il n'y a aucun employé avec cet matricule .")
    else :
        print(employe)
        employe.AfficherInfo()

# modifier une employe dans la list
def modifierEmploye():
    matModifier = int(
        input("Entrer la matricule de l'employe qui souhaite modifier : ")
    )
    employe = getObject(matModifier)
    if employe is None:
        print("il n'y a aucun employé avec cet matricule .")
    else:
        print(
            "Si vous souhaitez changer la valeur, écrivez oui. Si vous ne le souhaitez pas, écrivez non."
        )

        def TestOuiNon(test):
            while test != "oui" and test != "non":
                test = input("please entrer oui ou non : ")
            return test

        def ModifierOuiNon(obj, attribut):
            objOuiNon = input(f"Souhaitez-vous changer {attribut} (oui/non): ")
            if TestOuiNon(objOuiNon) == "oui":
                if attribut == "salaire":
                    setattr(
                        obj, attribut, int(input(f"Ecrire un nouveau {attribut} : "))
                    )
                # elif attribut == "matricule":
                #     matM = int(input(f"Ecrire un nouveau {attribut} : "))
                #     checkMatricule(matM)
                #     setattr(obj, attribut, matM)
                elif attribut == "permanent":
                    testPer = input(f"Ecrire un nouveau {attribut} : ")
                    while testPer not in ['oui' , 'non'] : 
                        testPer = input(f"Ecrire un nouveau {attribut} : ")
                    setattr(obj, attribut, testPer == "oui")

                elif attribut == "nom":
                    setattr(obj, attribut, input(f"Ecrire un nouveau {attribut} : "))

        ModifierOuiNon(employe, "matricule")
        ModifierOuiNon(employe, "nom")
        ModifierOuiNon(employe, "salaire")
        ModifierOuiNon(employe, "permanent")


# supprimer une employe dans la list
def removeEmploye():
    matRemove = int(input("Entrer la matricule de l'employe qui souhaite supprimer : "))
    remEmploye = getObject(matRemove)
    if remEmploye is None:
        print("il n'y a aucun employé avec cet matricule .")
    else:
        ListOfEmploye.remove(remEmploye)
        print("cet employé à été supprimé .")


printLesChoix()
choix = int(input("Entrer Votre Choix : "))



while choix != 0:
    if choix < 0 or choix > 4:
        print("Désolé, le choix n'est pas disponible dans les options.")
    else:
        if choix != 1 and len(ListOfEmploye) == 0:
            print("la list des employes est vide ")
        else : 
            match choix :
                case 1 : addEmploye() 
                case 2 : rechercheEmploye() 
                case 3 : modifierEmploye() 
                case 4 : removeEmploye() 

    printLesChoix()
    choix = int(input("Entrer Votre Choix : "))
