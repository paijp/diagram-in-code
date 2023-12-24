# diagram-in-comment

- You can draw a diagram using the comment block in your code.
- This command generates this diadram.

```
 $ php diacom.php <helper/jp.pa-i/syntaxdiagram.php >syntaxdiagram.html
```

https://paijp.github.io/diagram-in-comment/helper/jp.pa-i/syntaxdiagram.html

- And you can generate these diagram:
- https://paijp.github.io/diagram-in-comment-helper-jp.pa-i.cir/map32mx2-28.html from this code: https://github.com/paijp/diagram-in-comment-helper-jp.pa-i.cir/blob/main/map32mx2-28.php
- https://paijp.github.io/smallest-touchpanel-ui/pic32mx/lcdtp.html from this code: https://github.com/paijp/smallest-touchpanel-ui/blob/main/pic32mx/lcdtp.c



- Other helpers:
-- https://github.com/paijp/diagram-in-comment-helper-jp.pa-i.cir/



- If you put this code into stdin, 

```
/*sample/type-a
100
110
*/

/*sample/type-b
200
*/

/*sample/type-a
300
*/
```

- diacode.php will do this.

```
$ php sample/type-a.php <<EOO
/*sample/type-a
100
110
*/

/*sample/type-b
200
*/

/*sample/type-a
300
*/
EOO

$ php sample/type-b.php <<EOO
/*sample/type-b
200
*/

/*sample/type-a
300
*/
EOO

$ php sample/type-a.php <<EOO
/*sample/type-a
300
*/
EOO
```

- Each script should process the block before the first '*/'.
- Because some scripts may process the next block of code, or the entire code.

- diacode.php only requires stdin and stdout, so you can run these scripts under Docker.
