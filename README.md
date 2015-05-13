# PhillPrice\ResumeBundle
Symfony 2 Resume Example

**This was built in 2 hours (so far) but will continue) it doesn't help its built in a vagrant box on a 7 year old macbook air that's struggling to keep up with typing here...**

## An explanation of the model
A resume / CV bundle that have the following elements
 - Experience
 - Education
 - Places (A place can have many experience and education entities
 - Projects (not related at the moment but should relate to experience and education like places)
 
There are fixtures to create skeleton records
The ORM is built in YAML rather than in annotations.

## TODO
- The next step is building the forms for new / edit / delete stages as separate objects pulled into controllers.
- There are a couple of views ready for education/list and experience/list but more are needed. (Don't judge the look and feel - this is basic)
- At the moment multiple users are out of scope but it could have authentication around it for a mini Linked In CV directory
- At the moment everything is run off IDs but sluggifying would make better SEO
- The system also needs an overallcontroller to merge the different sections, whether directly or ajax loading.
- I envisage the Places using a geocode process in the __construct of Place to get lat/lng for showing a map
- I'd like to implement paging, search and date filtering of records
- There's no images yet - that's needed.
- For someone who likes TDD there aren't any tests assertWhoops().
- Referrals in the model, and using Mailer to share the CV with someone, maybe integrating mandrill
- Securing the forms...
