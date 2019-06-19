(TeX-add-style-hook
 "hb-tikz"
 (lambda ()
   (TeX-run-style-hooks
    "tikz-qtree")
   (TeX-add-symbols
    '("DrawBox" 2)
    '("tikzmark" 1)
    '("target" 2)
    '("source" 2)
    '("ifcounter" 1))
   (LaTeX-add-environments
    '("conds" LaTeX-env-args ["argument"] 1)
    '("funcdef" LaTeX-env-args ["argument"] 1)))
 :latex)

