(TeX-add-style-hook
 "main"
 (lambda ()
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "hyperref")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "hyperimage")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "hyperbaseurl")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "nolinkurl")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "url")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "path")
   (add-to-list 'LaTeX-verbatim-macros-with-delims-local "path")
   (TeX-run-style-hooks
    "latex2e"
    "macros/hb-letters"
    "macros/hb-ccfv"
    "macros/hb-math-writing"
    "macros/hb-structure"
    "macros/hb-tables"
    "macros/hb-tikz"
    "article"
    "art10"
    "onecolceurws"
    "url"
    "xspace"
    "xparse"
    "color"
    "amsmath"
    "amsfonts"
    "amssymb"
    "stmaryrd"
    "mathrsfs"
    "array"
    "enumitem"
    "endnotes"
    "hyperref"
    "bussproofs"
    "subcaption"
    "stackengine")
   (LaTeX-add-labels
    "sec:intro"
    "sec:ccfv"
    "tab:ccfv-calculus"
    "sec:inst-indexing"
    "sec:inst-framework"
    "sec:inst-goal"
    "sec:inst-dismissal"
    "fig:inst-dismissal"
    "sec:experiments"
    "fig:sfig1"
    "fig:sfig2"
    "fig:fig1"
    "tab:comparison"
    "fig:sfig3"
    "fig:sfig4"
    "fig:fig2"
    "sec:conclusion"
    "sec:appx-A")
   (LaTeX-add-environments
    '("posterconds" LaTeX-env-args ["argument"] 1)
    '("conds" LaTeX-env-args ["argument"] 1)
    '("funcdef" LaTeX-env-args ["argument"] 1)
    '("Ualgorithm" LaTeX-env-args ["argument"] 0))
   (LaTeX-add-bibliographies
    "bib"))
 :latex)

