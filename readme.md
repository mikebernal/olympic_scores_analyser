## OLYMPIC SCORES ANALYSER

### VALIDATION RULES

1. The Year of Games must be a 4 digit number.
2. City of Games must be text only and not blank.
3. Commence Date and End Date must not be blank, must be in proper date format
of DD/MM/YYYY and the Commence Date must be before the End Date.

4. Competitor name cannot be blank, must be at least 5 characters in length and
contain no numbers.
5. Medal must be G for Gold, S for Silver or B for Bronze and cannot be blank or
numeric.
6. World Record must be Y for Yes or N for No and cannot be blank or numeric.

### REQUIREMENTS

1. You are to read in all the results in the form and then tally up the list of countries
and their Gold, Silver and Bronze medals plus their total number of medals.

2. This list is to be presented in order of most through least medals.
3. Where two (or more) countries have exactly the same medal count and type of
medals then they have to have the same position number on the ladder (ie if they
are both 8th, then both need to have 8 in front of their name) and appear in
alphabetical order.

4. Below the list of medal winning countries, we also want a list of Athletes who
have set a world record (and for what sport).

### To do

1. Validate form data
2. Tally all countries
3. Sort by number of medals

### Nice to have:

1. Add competitor button
2. Add select tag for medal(G - gold, S - silver, B - bronze)
3. Add select tag for world record(Y - Yes, N - No)
4. Display only the submit button if competitor row is more than 1.


##### Author: Mike Bernal
##### Repo: github.com/mikebernal/olympic_scores_analyser

##### Notice: assets/countries.json content are from https://gist.githubusercontent.com/keeguon/2310008/raw/bdc2ce1c1e3f28f9cab5b4393c7549f38361be4e/countries.json