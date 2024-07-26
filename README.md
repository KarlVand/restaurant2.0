# Restaurant 2.0

---

## The mission

We did create a _simple_ restaurant website where we learned to organise the task and used **bootstrap** on top of **css** to create the **designs**.

Our current mission is to take the website structure back and implement **Back-End** features, create a **database** and a **back office** to manage the messages submitted via the site's contact form, also to upload on the site **dynamically**, for a dynamic gallery or handle temporary and frequent promotions via a **CMS**.

---

## Setup

I learned the existence of **Docker** and used a **container** with **PHP, mysql** and a **MariaDb** database. Learning these tools is the main goal of this exercice.

---

## Contact form managment

The contact form is managed by a **back office** where we can see all the messages submitted via the form in the contact page of the restaurant. The restaurant manager has his own **admin** page where he can handle the messages like a simple mailbox: read the messages, delete them and reply.

---

> ### FUTURE ENHANCEMENT

I could create a design for the **back-office**, and make the management system more performant, it could be possible to reply via the page instead of having to setup via an external mailbox system. Storing and managing the messages could add some functionalities for the business owner.

Also, the reply message for the customer is displayed on a separated blank page, which disrupt the user's experience, the best way would be to _echo_ the confirmation under the form once the **submit** button is hit.

I need to learn the way to **format** how the user fills the form's **input** and add some constrains if necessary,
for example for making sure that the email address is in a correct format (something **@** something **.** something).

![Alt text]("https://i.giphy.com/media/v1.Y2lkPTc5MGI3NjExNjBjdGxxcW5qc2FxaTFuamhnZXBuem94cGliejI2dmMyZ2R6aDZjdyZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/33IuTLxqRETHkZUaH4/giphy.gif")
