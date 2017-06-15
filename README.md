## Milestone1 feedback

Purpose, Audience, Goal and User Story was perfect and to the point. I was easily able to imagine the persona you created. The use case lays out exactly how someone would use your site. The social media links are a nice touch and should serve you very well.

#### clarifications 

One small thing the website you will create is one page so a user will not be able to navigate between pages, but they will be able to navigate between different sections on the page. Also while your directory structure is perfect can you move the CSS directory into documentation. That way you can a have separation of concern with the documentation CSS and the actual sites CSS

### feedback awesome job with Milestone1 this passes at tier IV.

## Milestone 2&alpha; Feedback

Great job on making your wireframes and descriptions straight to the point with no fluff. I really like the way you've broken up each section on the desktop wireframe, which will look and flow nicely on mobile as well. If you're attempting to get a position as a frontend developer after bootcamp I think your portfolio section will lend itself nicely to job requirements, and past work highlighting your ability to make things look awesome! :)

According to [W3 Validator](https://validator.w3.org/nu/?doc=https%3A%2F%2Fbootcamp-coders.cnm.edu%2F~lmcduffie%2Flittleloveprint%2Fepic%2Fmilestone-2.php) you have no warnings or errors, huzzah! However, I did notice that you left out an important piece of the HTML puzzle, which is: `<meta name="viewport" content="width=device-width, initial-scale=1">`. That `<meta>` tag is important for responsive development. I noticed that you have it included in your index.php file, but you've left it out in your milestone 2&alpha;.

Another thing I noticed was your directory structure on GitHub is a little bit off from what is expected, according to [milestone 1 requirements](https://bootcamp-coders.cnm.edu/projects/personal/milestone-one/). According to milestone 1 your directory structure should look something like this:

my-pwp-name
* public_html
    * documentation
        * milestone-1.php
* .gitignore
* LICENSE
* README.md

Overall your html is great and I think your PWP is going to come out looking great.

### grade Tier IV - Great job! https://bootcamp-coders.cnm.edu/projects/personal/rubric/

## Milestone 2b Feedback
Detailed feedback left via Slack. Send me a DM this weekend if you run into issues. Your Milestone 2b passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/) 

## Milestone 3 / Final PWP Evaluation
I see that you've done a lot of work after the due date - so I have to base your grade evaluation on your repository at the last commit before 12:00 on 6/7/17. https://github.com/littleloveprint/littleloveprint/tree/a119983a5022d2308a66b3c6a6dae00fc6ac2985

It looks like you have a really beautiful direction you are heading towards here, but the implementation can use a little refinement. Consistency with the UI elements in the Bootstrap grid will help a lot - and you're really close. Overall I think there is too much complexity in the grid structure here, and too many columns and offsets. My biggest suggestion is to simplify. There are some suggestions I have listed in the **Edits &amp; Suggestions** section below.

It looks like you have the Rellax library loaded via Bower AND npm, but also have both the minified and development files included in the site at the root of the /public_html directory too. These files really belong in the /js directory, and only require one method of inclusion in your project - not three. The simplest method to include this library in your project would just to include `rellax.min.js` in your /js folder, load it in your &lt;head&gt; tag. But I don't see it implemented on the site at all. It's really best that you clean up and remove all the things that are "dead code" and not implemented.

Overall - what I see are too many complexities that you seem to have struggled with. I would definitely suggest going back to basics, and build things up one step at a time. Utilizing and debugging 3rd party tools (other people's code) is really a much more difficult and complex way to go before mastering the basics from scratch. You definitely have an eye and a talent for front-end, so continue to practice and implement your ideas. I particularly love the [Codrops Blog](https://tympanus.net/codrops/) and [CSS Tricks](https://css-tricks.com/) for inspiration and tutorials. But I cannot emphasize the importance of mastering the fundamentals before diving into complex territory.

It looks like you have the contact form wired up successfully on your live deployment - nice work. Check your email and see if you got my test message. One UX/UI problem I see is that your form output-area is placing the error/success output way up above the form in the wrong place... right under the image carousel.

You had some ambitious ideas for PWP - and I congratulate you on challenging yourself. You're almost there. Continue to practice your front end skills, you have a talent for it. Your Milestone 3/Final Delivery for PWP passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

Your overall passing grade across all of your PWP Milestones is [27/40 points (67.5%)](https://bootcamp-coders.cnm.edu/projects/personal/rubric/#sample-score).

- Milestone 1 - 20%: Tier IV 40(0.2) = 6
- Milestone 2a - 20%: Tier IV 40(0.2) = 8
- Milestone 2b - 10%: Tier III 30(0.1) = 3
- Milestone 3 - 50%: Tier  II 20(0.5) = 10

### Edits &amp; Suggestions
- The output area for your contact form in in the wrong place - it renders up above the form, under the image slider. Move lines 248-252 down under 310.
- I would consider linking up your portfolio items to the URLs of the projects, or a slideshow so I could see more details regarding the work you did! It looks like beautiful impressive stuff - I was wanting to see more. :)
- Try formatting your images inside the slider to have consistent dimensions - this really helps things work better inside image sliders.
- combining a `container` class and a Bootstrap grid class on the same div is going to cause layout issues: see line 191.
- It's incorrect to use the &lt;code&gt; tag around a form. Use CSS to style the form field font-style.
- Highly recommended to use the `target="_blank"` attribute on all external links to open them in a new tab - general UX good practice.
- Avoid overuse of the &lt;br&gt; tag to space out page elements. Use padding and/or margin in your CSS instead. See line 315.
- Watch HTML indentation
- Remove all dead code and redundant dependencies. You have too much js that's not being used at all. Delete `jquery.js`, `bootstrap.js`, `bootstrap.min.js` from your /js directory - all of these you are loading via CDN links. And any other js libraries that you are not using or loading, like rellax.js, mine.js... etc. Same applies to your CSS... you are loading all the necessary Bootstrap CSS via the CDN link, so you don't need to have `bootstrap.css` and `bootstrap.min.css`.
