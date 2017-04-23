#!/bin/bash

DATA="data_$1_$2"
TINY=0.01
TIMEOUT=300
TIMEBORDER=`expr $TIMEOUT '*' 2`
HALF=`expr $TIMEOUT / 2`
PLOT="test_$1_$2_$TIMEOUT.eps"
value()
{
	if [ "$1" = fail ] 
	then 
		echo $TIMEBORDER
	elif  (( $(echo "$2 > $TIMEOUT" | bc -l ) ))  
	then
		echo $TIMEBORDER
	else 
		echo $2
	fi
}



cat $1 | while read FILE   
		do  
			ROW=($FILE) 
			ROW2=($(grep $(basename ${ROW[0]/.p/}) $2))
			if [ -n "$ROW2" ]; then
			  echo `value "${ROW[1]}" "${ROW[2]}"` `value "${ROW2[1]}" "${ROW2[2]}"`
			 fi		
		done > $DATA

		


echo "
set terminal postscript eps enhanced 'Times-Roman' 18 

set grid
set key
set clip points
set logscale xy
set output '"$PLOT"'
#set arrow from 7200,0.1 to 7200,10000 nohead ls 3
#set arrow from 0.1,7200 to 10000,7200 nohead ls 3
#set arrow from 0.1,0.1 to 7200,7200 nohead ls 1
set arrow from $TINY,$TINY to $TIMEBORDER,$TIMEBORDER nohead ls 1
set arrow from $TIMEOUT,$TINY to $TIMEOUT,$TIMEBORDER nohead ls 3
set arrow from $TINY,$TIMEOUT to $TIMEBORDER,$TIMEOUT nohead ls 3
set arrow from $HALF,$TINY to $HALF,$TIMEBORDER nohead ls 1
set arrow from $TINY,$HALF to $TIMEBORDER,$HALF nohead ls 1
set xlabel '"`echo $1 | sed 's!\_!-!g'`"' 
set ylabel '"`echo $2 | sed 's!\_!-!g'`"' offset 3
set size square
plot [$TINY:$TIMEBORDER][$TINY:$TIMEBORDER] '"$DATA"' ls 2 with points title ''
" > gnuplot.in

gnuplot gnuplot.in
echo $PLOT
