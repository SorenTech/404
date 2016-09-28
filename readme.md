**Custom 404 Template for Bootstrap-based WordPress themes**
Designer: Alexander P. Floyd Marshall, Soren LLC
url: http://soren.tech
version: 0.4
contact: joysandconcerns@soren.tech

Contributions welcome! Fork us and send pull requests.

Installation and Use:

Please note, this template is designed to be used with WordPress themes that include Bootstrap. It uses Bootstrap classes along with inline styles to make it work out of the box without requiring custom styles to be added to the theme stylesheet. These things are open to change.

To use this in your theme, add this repository as a submodule and do one or both of the following:
- Use "get_template_part('404/index'); everywhere you need to fetch the error template in your theme, or
- Put "get_tempalte_part('404/index'); in your 404.php file in the main template directory and use get_template_part('404'); where you need to fetch the error template in your theme

