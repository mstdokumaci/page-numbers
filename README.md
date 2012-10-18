#page_numbers helper function

You can find many pagination helpers. None of them helps you building a smart pagination menu.
They all calculate item count, page count and create SQL LIMIT QUERIES.

This helper has nothing to do with paginating the content or SQLs to write for.
It only helps to build a pagination menu deciding which pages to link.

## Problem

Let's say you have 67 pages of content and currently displaying 17th page.
Listing links for all pages is not a good option.
67 different links on a single pagination menu would look terrible and of course confusing for visitors.

For sake of simplicity in many sites, they use a pagination menu like this:

< Previous  (**17** of 67 pages) Next >

This is not much user friendly of course.
If you want to go page 52, you need to click "Next >" link 35 times.
Sounds bad.

Some of them uses a menu like this:

<< First .. 11 | 12 | 13 | 14 | 15 | 16 | **17** | 18 | 19 | 20 ... Last >>

This one also is not a good solution. Only makes possible, jumping 10 pages in one click, not more.

## Solution

I wrote an helper function creates a better menu, deciding which pages to link.
So you give your **current page number**, **count of total pages** and **count of links you want** for your menu.
Function returns **a list of page numbers** to link.

### Examples

Displaying 17th of 67 pages (15 links):

    echo implode(' | ', page_numbers(17, 67, 15));

Output is:
1 | 4 | 7 | 10 | 13 | 15 | 16 | 17 | 18 | 20 | 30 | 40 | 50 | 60 | 67


Displaying 321st of 893 pages (12 links):

    echo implode(' | ', page_numbers(321, 893, 12));

Output is:
1 | 100 | 200 | 300 | 320 | 321 | 322 | 350 | 400 | 500 | 600 | 700 | 800 | 893

Displaying 30th of 83 pages (10 links):

    echo implode(' | ', page_numbers(30, 83, 10));

Output is:
1 | 10 | 20 | 25 | 29 | 30 | 31 | 35 | 40 | 50 | 60 | 70 | 80 | 83

These pagination menus allow users to jump any page of the list with a few mouse clicks.