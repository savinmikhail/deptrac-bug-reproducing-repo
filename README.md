## Minimal bag reproducer repo for qossmic/deptrack

start steps:

- ```composer install```
- ```make dep```

I got
![Output Example](./console-output.png)

So I expect deptrac to differentiate ./config from ./src/Config, but it doesn't happen

Possibly the part of the problem is that I use macOS, which is case-insensitive to directories

Mb I misconfigured deptrac
