<?php

// Deoxyribonucleic acid (DNA) is a chemical found 
// in the nucleus of cells and carries the "instructions" 
// for the development and functioning of living organisms.

// In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". 
// You have function with one side of the DNA (string); 
// you need to get the other complementary side. DNA strand is never empty 
// or there is no DNA at all.

// DNA_strand("ATTGC") // returns "TAACG"
// DNA_strand("GTAT") // returns "CATA"

function DNA_strand($dna) {
  return strtr($dna, 'ATCG', 'TAGC');
}
