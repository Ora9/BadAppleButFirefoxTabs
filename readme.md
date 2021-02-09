# Read me

This repo is an experiment about taking firefox to its limit by using tabs favicons as pixel for showing Bad Apple!!

Video here :

So basically I use 36 tabs on 26 windows (1008 tab in total)

Here is an explanation about the important thing (more details are available in each files as comments)

## Open everything

first I open a windows with 

`"C:\Program Files\Mozilla Firefox\firefox.exe" -new-window http://localhost/badApple/opener.html?y=0`

where y (at the end) is the window number (the Y axis)

It open `opener.html` that open 36 tabs of `index.html`

I do it 26 times, and each time I pin every tabs (a firefox feature to show only favicon, so it takes less space, perfect for me)

Of course I don't pin by hand all tabs, i do it with `Pin Unpin All` (a firefox extension)

## Setup Everything

All 1008 tabs (36x26) are here, now it's time to start, we reload every tabs with `Reload All Tabs` (another firefox extension)

For me it takes around 3 min (yep, that's a lonnng loading time)

If you see smiles everywhere, that good!

Basically, index.html will ask getRoute.php to make a route (idk why i named it like that, but it's a big list of states (0, 1, 2) that define at any time if a pixel is black, grey or white) every tab receive a different "route" based on the X and Y position 

It look like this :

`0000000000000000000111111111111000000000111222222222222222`....

## Watch

Now, when it's time (literally, when it's was 21h55 for me) everything start

And it's gone for 1h20 of rendering, at 90% ram (i have 8gigs), and 60% CPU



