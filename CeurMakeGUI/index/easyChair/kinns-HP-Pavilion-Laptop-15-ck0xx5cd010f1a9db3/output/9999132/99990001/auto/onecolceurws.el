(TeX-add-style-hook
 "onecolceurws"
 (lambda ()
   (TeX-add-symbols
    "abstractname"
    "institution"
    "thefootnote"
    "maketitle"
    "thanks"
    "copyrightspace"
    "section"
    "subsection"
    "subsubsection"
    "paragraph"
    "subparagraph")
   (LaTeX-add-environments
    "abstract"
    '("posterconds" LaTeX-env-args ["argument"] 1)
    '("conds" LaTeX-env-args ["argument"] 1)
    '("funcdef" LaTeX-env-args ["argument"] 1)
    '("Ualgorithm" LaTeX-env-args ["argument"] 0)))
 :latex)

