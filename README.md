Indian Postal Services Sample Project
**Overview**:
This project was created as a sample website for Indian Postal Services. It demonstrates the integration between a website and an Android app to facilitate package registration and tracking.

**Features**
**Sender**- Package Registration: The sender can register a package either through the website or the Android app.
During registration, a Unique ID (UID) is generated for the package.

**Receiver** - Can use the tracking feature from the integrated website to track the package using the UID generated by sender. 

The UID are stored on Firebase Database and UID are generated using a randomizer query which has restriction on Generating duplicate, Uid are stored on Firebase database and the Query runs through the database to make sure the duplicate UID is not generated.

This website and App is in sample format and no final version or revision has been done on this