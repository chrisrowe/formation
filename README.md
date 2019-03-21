# New computer setup
```
- Download this repo and unzip to your home folder
- `cd ~/formatio && ./slay`
```

## 1Password
- Add Good Work 1Password.com account
- In Preferences > Advanced > Enable "Allow creation of vaults outside 1Password accounts"
- Under Sync, change Primary to iCloud
- Enable Spotlight and 3rd party app integrations in Preferences > Advanced

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

## Dropbox
- Open Dropbox, sign into Personal and Work
- Selectively sync just the personal “Sync” folder (do the others later)

## Open Alfred
- Activate the Powerpack, licence in 1Password
- Set up syncing under the Advanced tab, the folder is in Dropbox/Sync/Alfred, make sure Dropbox has finished syncing before doing this
- Change theme to macOS Sierra

## Fonts
- Install Dank Mono from Dropbox/Sync

## Chrome
- Open Chrome and sign in to chrisrowenet
- Wait a few minutes for it to sync all settings and extensions etc.

## System Prefs
- Keyboard
    - Shortcuts > Spotlight: Disable "Show Spotlight search"
- Accessibility
    - Use keyboard shortcuts
    - Use scroll gesture ctrl
    - Disable smooth images
- Dock
    - Disable “Show recent applications in Dock” in System Preferences
- Internet Accounts
    - enable relevant services, iCloud keychain should bring them over

## Messages
- Check signed in and enable Messages in iCloud

## Spectacle
- Run spectacle and disable everything except left/right half, change fullscreen to alt+cmd+up
- Enable “Launch at login”, change to run as a background app in the footer settings

## Mail
- In prefs, under viewing, enable contact images in Mail app
- Show most recent messages at the top of conversations

## Contacts
- Sort by first name

## Dropbox
- Disable selective sync (Sync all folders)
