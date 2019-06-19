(TeX-add-style-hook
 "hb-tables"
 (lambda ()
   (TeX-run-style-hooks
    "enumitem"
    "array"
    "multirow")
   (TeX-add-symbols
    '("specialcell" ["argument"] 1)
    "arraystretch")
   (LaTeX-add-environments
    '("conds" LaTeX-env-args ["argument"] 1)
    '("funcdef" LaTeX-env-args ["argument"] 1)
    '("Ualgorithm" LaTeX-env-args ["argument"] 0))
   (LaTeX-add-counters
    "tabrow"
    "fdef")
   (LaTeX-add-array-newcolumntypes
    "L"
    "F"))
 :latex)

