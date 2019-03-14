# New computer setup
```
git clone https://github.com/chrisrowe/formation.git
cd formation
./slay
```

## Wallpaper
- Open Louie Mantia's [Juxtaposition Wallpaper](http://reserve.louie.land/Wallpapers/Juxtaposition/Juxtaposition%20-%20Desktop.jpg) in Safari and use right click > set as wallpaper to

## 1Password
- Open 1Password and sync in via iCloud
- Enable Spotlight and 3rd party app integrations in Preferences > Advanced
- Add Good Work 1Password.com account

## Dropbox
- Open Dropbox, sign into Personal and Work
- Selectively sync just the personal “Sync” folder (do the others later), the Good Work account will do local SmartSync

## Open Alfred
- Activate the Powerpack, licence in 1Password
- Set up syncing under the Advanced tab, the folder is in Dropbox/Sync/Alfred, make sure Dropbox has finished syncing - before doing this
- Remove the default Spotlight shortcut in System Preferences > Keyboard > Shortcuts
- Change shortcut to cmd+space
- Enable clipboard history for all types
- Enable snippets auto expand
- Change theme to macOS Sierra

## Fonts
- Install Dank Mono from Dropbox/Sync

## Chrome
- Open Chrome and sign in to chrisrowenet
- Wait a few minutes for it to sync all settings and extensions etc.

## System Zoom
- Use keyboard shortcuts
- Use scroll gesture ctrl
- Disable smooth images

## Messages
- Check signed in and enable Messages in iCloud

## Dock
- Drag and add “Downloads” to right hand side of Dock
- Disable “Show recent applications in Dock” in System Preferences

## Spectacle
- Run spectacle and disable everything except left/right half, change fullscreen to alt+cmd+up
- Enable “Launch at login”, change to run as a background app in the footer settings

## Internet accounts
- Open “Internet accounts” pref pane and enable relevant services, iCloud keychain should bring them over

## Dropbox
- Disable selective sync (Sync all folders)

## Mail
- Enable contact images in Mail app
- Show most recent messages at the top of conversations

## SSH
- Manually export the 2 key files from 1Password to the desktop
```
cd ~
mkdir .ssh
mv ~/Desktop/id_rsa* ~/.ssh/.
cd .ssh
chmod 600 id_rsa
chmod 644 id_rsa.pub
# Remove ssh key passphrase
ssh-keygen -p
```

## Contacts
- Sort by first name