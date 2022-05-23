import json

import scipy.optimize


with open('data.json') as fic:
    data = json.load(fic)

def convInt(mat):
    l = len(mat)
    m = []
    for i in range(l):
        m += [[float(j) for j in mat[i]]]
    return m

nbVariables = int(data[0]['nbVariables'])
nbContraintes = int(data[0]['nbContraintes'])

contraintes = convInt(data[0]['contraintes'])
coefficients = [float(j) for j in data[0]['coefficients']]
scndMembre = [float(j) for j in data[0]['scndMembre']]


res = scipy.optimize.linprog(
    coefficients,
    contraintes,
    scndMembre,
    bounds=(0, None),
    method="simplex",
)

print(res['x'])

tableau = [{
	"res": list(res['x']),
	"opt": float(res['fun'])}
]

with open('data1.json', 'w') as fic2:
	json.dump(tableau, fic2)



