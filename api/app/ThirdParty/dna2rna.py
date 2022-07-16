from Bio.Seq import Seq

import sys

seq = sys.argv[1]
permitido = ['A', 'T', 'C', 'G']
seq_valida = ''

for i in seq:
    if i.upper() in permitido:
        seq_valida+=i.upper()

dna = Seq(seq_valida)
rna = dna.transcribe()

print({ 
    "rna": str(rna) 
})