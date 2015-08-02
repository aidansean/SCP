from project_module import project_object, image_object, link_object, challenge_object

p = project_object('SCP', 'SCP')
p.domain = 'http://www.aidansean.com/'
p.path = 'scp'
p.preview_image    = image_object('%s/images/project.jpg'   %p.path, 150, 250)
p.preview_image_bw = image_object('%s/images/project_bw.jpg'%p.path, 150, 250)
p.folder_name = 'aidansean'
p.github_repo_name = 'SCP'
p.mathjax = True
p.tags = 'Fiction'
p.technologies = 'CSS,HTML'
p.links.append(link_object('http://www.scp-wiki.net/', '', 'SCP Wiki'))
p.introduction = 'SCP stands for Secure, Contain and Protect. The SCP is a wiki of special instructions for containing objects which are of interest to "The Foundation". Writing these instructions proves to be a fascinating and rewarding exercise in creative writing, and a good way to practice one''s horror writing skills.'
p.overview = '''The SCP Wiki is description of a fictional emergency containment facility.  This project collects mostly attempts at writing articles, and anything else relevant to the SCP, including the python script.'''

p.challenges.append(challenge_object('The python script has to make an HTTP request and keep the user entertained while it handles the request.', 'This was the first time I used python with HTTP requests, which turned out to be quite easy.  The script produces a series of messages to emulate the security steps needed to access the articles.', 'Resolved'))

p.challenges.append(challenge_object('It would be nice to have ASCII images appear.', 'Most SCP articles contain small images, and I\'ve already worked with <a href="http://aidansean.com/projects/?p=17">ASCII art</a> elsewhere, so it should be a matter of putting the two together, when I get time.', 'To be done'))

