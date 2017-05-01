# Morning Update

A webpage I can check each morning that keeps me up to date on a few things. It uses some APIs to do this.

> Weather from [Dark Sky API](https://darksky.net/dev/)

**The plan**

It will tell me the following:
- ~~A different word each day to describe the day?~~
- ~~What day of the week it is~~
- ~~The temperature outside (degrees celsius)~~
- ~~What the weather will be in 1 hour ahead of the current time~~
- ~~What direction and speed (mph) the wind is~~
- A different joke each day

**Copy**

```
Hey Chris, mellow Monday. It's 10° outside & in an hour it will be raining. There is a 5mph coming from the South East . A joke you say? What is red and smells like blue paint? Red paint.
```

**Design thoughts**

- ~~Purely typographic, nice big responsive type~~
- ~~Try not to use webfonts?~~
- Background and text colour change slightly to reflect the time of day?

**Things to make**

- [ ] Favicon (.ico)
- [x] Manifest (.json)
- [ ] Icon @ 16, 32, 96px (.png)
- [ ] App icon @ 192px (.png)

**Notes**

**Building the Dark Sky API url**

**First part is the API url includes**

- API url
- Private API key
- Latitude
- Longitude

For example:
`https://api.darksky.net/forecast/APIKEY/12.34,-12.34`

**Then to add optional queries add `?` after URL**

For example:
`?exclude=alerts,flags&units=uk2`
