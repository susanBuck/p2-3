# Project 2
+ By: *Jared Jessup*
+ Production URL: <http://p2.jjessup.me>

## Outside resources
1. Background artwork adapted from a Malian indigo cloth.
2. Fonts 'Archivo Black' and 'Roboto' from [Google Fonts](https://fonts.google.com/?selection.family=Archivo+Black|Roboto).
3. DIY DYE LAB logo text built in AI by vector-manipulating the Khmer MN font.
4. Ref to [CSS-Tricks](https://css-tricks.com/examples/ShapesOfCSS/) to create `<div>` geometric shapes.
5. Info on natural dye extracts from [Botanical Colors](https://botanicalcolors.com/product-category/natural-dye-extracts/), [Maiwa](https://maiwa.com/pages/natural-dyes), [Wild Colours](http://www.wildcolours.co.uk/index.html) and Wikipedia articles for corresponding terms.
6. Insight on black circle HTML unicode from user SLaks on [Stack Overflow](https://stackoverflow.com/questions/4521381/bigger-version-of-bull).
7. Insight on 'X' cross HTML unicode from user Bruiser on [Stack Overflow](https://stackoverflow.com/questions/712132/in-html-i-can-make-a-checkmark-with-x2713-is-there-a-corresponding-x-mark)
8. Insight on info icon HTML unicode from user Biffen on [Stack Overflow](https://stackoverflow.com/questions/33878539/is-there-an-html-entity-for-an-info-icon)
9. Revisionary work informed by UX review from classmate Mihika Shilpi.

## 3 Unique inputs
(1) "C-Y-D" (Choose Your Dyes) dropdown menu
    a. Select dyes from 4 drop-down menus to:
        i. Color four components, 'face', 'nose', 'lips', and 'eyes', upon submit.
        ii. Frame inputs (2) and (3) upon submit.
    b. Default "none"
    c. Form validations inc:
        i. Will not submit when all values are "none" (error code: `err-src cydn`).
        ii. Will not submit when 'nose', 'lips' or 'eyes' values equal the 'face' value (error code `err-src cydm`).
(2) "L-S-N-" (learn Something New) radio buttons
    a. Click input from 4 categories to retrieve information for 'type', 'name', 'color', 'geography'.
    b. No default
    c. Form validation inc:
        i. Will not submit if no input is selected (error code `err-src lsn`).
(3) Add an indigo overlay checkbox
    a. Click to adjust color values of 'face', 'nose', 'lips' and 'eyes' upon submit.
    b. No default
    c. No form validation

## Class
(1) The Dye.php class is used to construct 4 objects and perform relevant functions for form performance.
(2) The Form.php class is used to get and evaluate form data.
(3) The MyForm.php class extends Form.php for customization purposes.

## Code style divergences
For single line comments, the `\\` and `#` notation was used heirarchically to organize category and sub-category comments.

## Notes for instructor
In process.php, the condition in lines 31-40, manipulates the 'face' value to perform validation using a customValidate method from MyForm.php based on the validate method from Form.php, which may cause confusion when reviewing the error array in lines 52-58.
As I notice issues with device responsiveness or browser support, I may revise and will update.