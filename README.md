Init-project git just host useful utils to initialize a project

Install git hooks
-----------------

To install the git hooks, just copy the files in the folder *"hooks"*.
You can also install them via scripts in your *composer.json*:

```
    "require-dev": {
        "lxark/init-project-git": "dev-master"
    },
    "scripts": {
        "post-install-cmd": [
            "cp vendor/lxark/init-project-git/hooks/* .git/hooks"
        ],
        "post-install-cmd": [
            "cp vendor/lxark/init-project-git/hooks/* .git/hooks"
        ]
    },
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/lxark/init-project-git.git"
        }
    ]
```

I don't think Composer events are needed to install it automatically.