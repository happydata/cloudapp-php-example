## Nomie Cloud App PHP Example

This example showcases how to create a [Nomie](https://nomie.io) Cloud App using PHP. No framework needed.

[...more about Nomie Cloud App Development](https://github.com/happydata/nomie-docs/blob/master/cloud-apps.md)

![](http://snap.icorbin.com/Screen-Shot-2017-01-23-10-18-37.png)

## Configuration

## ``join.json``

- Change ``id`` to your own unique id.
- Change all URLS (``capture``,``join``,``img``) to absolute paths to your own resources.


This example JSON will display to the user:

- 1 Tracker (as set in ``slots`)
- A text field for capturing the users name
- A select box for unit of measure (for example purposes)

![](http://snap.icorbin.com/Screen-Shot-2017-01-23-10-20-22.png)

Note: Once a user adds your cloud app to Nomie, they no longer will access your JOIN.json unless they remove the cloud app and re-add it. This sucks right now.

## Running

![](http://snap.icorbin.com/Screen-Shot-2017-01-23-10-22-02.png)
