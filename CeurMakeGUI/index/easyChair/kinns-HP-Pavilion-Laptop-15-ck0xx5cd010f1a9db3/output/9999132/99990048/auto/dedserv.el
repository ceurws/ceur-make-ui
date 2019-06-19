(TeX-add-style-hook
 "dedserv"
 (lambda ()
   (add-to-list 'LaTeX-verbatim-environments-local "lstlisting")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "lstinline")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "url")
   (add-to-list 'LaTeX-verbatim-macros-with-braces-local "path")
   (add-to-list 'LaTeX-verbatim-macros-with-delims-local "lstinline")
   (add-to-list 'LaTeX-verbatim-macros-with-delims-local "url")
   (add-to-list 'LaTeX-verbatim-macros-with-delims-local "path")
   (TeX-run-style-hooks
    "latex2e"
    "article"
    "art10"
    "graphicx"
    "onecolceurws"
    "amssymb"
    "amsfonts"
    "url"
    "listings"
    "authblk")
   (TeX-add-symbols
    '("text" 1)
    '("ueqn" 2)
    '("neqn" 2)
    '("eqn" 2)
    '("mw" 1)
    "nat"
    "integer"
    "rat"
    "real"
    "terms"
    "tops"
    "pos"
    "gfpf"
    "fpf"
    "fp")
   (LaTeX-add-labels
    "sec:intro"
    "deduction_server_figure"
    "sec:prot"
    "fig:csrprobs"
    "benchmarking_results"
    "sec:conc")
   (LaTeX-add-bibitems
    "BN:IJCAR-2010"
    "GK:CPP-2015"
    "HHMNOZ:Kepler-2011"
    "HV:CADE-2011"
    "KU:JAR-2014"
    "KE:SOSP-2009"
    "KLTUH:CADE-2012"
    "McCune:JAR-1997"
    "McCune:Wos-1997"
    "MP:JAR-2009"
    "MP:JAL-2007"
    "PNL:AAAIWS-2002"
    "PS:IJCAR-2014"
    "RRG:CO-2005"
    "Schulz:AICOM-2002"
    "Schulz:LPAR-2013"
    "Sutcliffe:JAR-2009"
    "Sutcliffe:LPAR-2010"
    "SSSU:TPTP-ANS"
    "TB:IJCAI-1985"))
 :latex)

