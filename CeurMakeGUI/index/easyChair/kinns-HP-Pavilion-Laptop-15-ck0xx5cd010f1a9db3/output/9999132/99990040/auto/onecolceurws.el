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
    "abstract"))
 :latex)

