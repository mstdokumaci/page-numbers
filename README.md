#page_numbers helper function

You can find many pagination helpers. None of them helps you building a smart pagination menu.
They all calculate item count, page count and create SQL LIMIT QUERIES.

This helper has nothing to do with paginating the content or SQLs to write for.
It only helps to build a pagination menu deciding which pages to link.

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

