# Folder and File Explorer

A zero dependencies, customizable, pure Javascript widget for navigating, managing (move, copy, delete), uploading, and downloading files and folders or other hierarchical object structures on any modern web browser.

<img width="1915" alt="image" src="https://user-images.githubusercontent.com/34475380/194520489-06f36507-a302-4fad-924a-7e033c54c310.png">



[Live Demo](https://www.dxh000130.top/demo.html)

Experience a clean, elegant presentation of folders and files in a mobile-friendly layout that looks and feels great on all devices.  CubicleSoft File Explorer is easily connected to any web application that needs to manage hierarchical objects (folders and files, database records, or even JSON, XML, etc).

## Features
The main features we have added in this project are **file retrieval**, **file annotation** and **tag**.
<img width="1915" alt="image" src="https://user-images.githubusercontent.com/34475380/194520489-06f36507-a302-4fad-924a-7e033c54c310.png">
### File Retrieval
#### Search Bar:
Left-click on the search bar and enter the file name or part of the file name, you can search for all files in the network disk with the file name you entered in the field. After the search is complete, you can hover over the file and you can view the folder to which the file belongs
![未标题-1](https://user-images.githubusercontent.com/34475380/194525448-d3205b34-22c1-4184-8b48-a9dddceb527e.jpg)
![未标题-2](https://user-images.githubusercontent.com/34475380/194525462-b0ffc682-4c7f-41a8-8d7b-69b92e7b364a.jpg)

#### Navigation Bar: 
This function displays the relationship of all files and folders in the network disk in the form of a tree-structured list.
Left-click on a folder to expand the file structure of the folder
![未标题-3](https://user-images.githubusercontent.com/34475380/194525555-4bc22e41-88f2-447f-834b-306997091905.jpg)

#### File Annotation:
1. Left-click on a file to select  
2. Click the Add Annotation button in the left toolbar   
3. Enter annotation in the window, then click Save	  
4. Hover the mouse over the file to view the annotations  
5. When the File Annotation window is opened, the annotation of the current file will be displayed by default.  
![未标题-4](https://user-images.githubusercontent.com/34475380/194525598-95d4a12a-2b26-4b43-8657-fd2d024bd73d.jpg)
![未标题-5](https://user-images.githubusercontent.com/34475380/194525641-67fde194-14b7-48bf-a6a3-baa26aa695f8.jpg)
![未标题-6](https://user-images.githubusercontent.com/34475380/194525660-423c898c-c7fb-442e-b2d4-17e8d611f902.jpg)

#### Tag:
1. Left-click on a file to select
2. Click the Tag button in the left toolbar
3. Select the tag you want to use or click "Add tag" to add a new tag group
4.  Left-click "Tag View" button at the bottom to switch to tag mode
5. Left-click on the tag name in the list on the left, and the files marked with the tag will be displayed.
6.  Left-click "HFO View" button at the bottom to go back
![未标题-7](https://user-images.githubusercontent.com/34475380/194525791-f85f178e-e4a7-4db6-b46a-a7a4fd57a72b.jpg)
![未标题-8](https://user-images.githubusercontent.com/34475380/194525801-6b1a3818-0514-45da-9741-185f7009ed63.jpg)


* Clean, elegant presentation of folders and files in a mobile-friendly layout.
* Zero dependencies.  No other libraries required!
* Can handle displaying thousands of files in a folder.
* Full keyboard, mouse, and touch support.  Secure from fake/simulated keyboard, mouse, and touch events.
* Keyboard shortcuts.  Lots of keyboard shortcuts.
* Folder history tracking and navigation.  Optionally navigate through folder history in the widget using the back and forward buttons on the mouse.
* Customizable toolbar.
* Create new files and folders.
* Easily rename and delete/recycle files and folders.
* Double-click/tap or press Enter to open items in your application-defined manner.
* Powerful file and folder selection tools.  Selection boxes with variable-speed scrolling on desktop browsers.
* Multi-select checkboxes on touch devices.  Can be enabled for non-touch devices too.
* Cut/Copy/Paste items using:  Keyboard shortcuts, mouse right-click menu, or toolbar buttons.
* Cut/Copy/Paste items between compatible widget instances...even across different web browsers!
* Drag-and-drop support between compatible widget instances.
* Drag-and-drop bulk uploading support directly from the OS for both files and folders.
* Drag-and-drop direct URL downloading support (Chromium only).
* Chunked file upload support.
* Download files and folders via a toolbar button.
* Items can be displayed as a thumbnail image, including folders.  Thumbnails are intelligently bulk loaded in the background using a custom lazy loader.
* Items can have detailed tooltips, overlays, size information, etc.
* Automatic item sorting (can be disabled per folder).
* Provides useful feedback on the status bar - items in a folder, number selected, active upload information, etc.
* Can easily be connected to a WebSocket backend (e.g. [Data Relay Center](https://github.com/cubiclesoft/php-drc)) to efficiently watch for folder updates.
* Event-handler style callbacks.  Way more callbacks than you'll probably need.
* Plenty of automation possibilities too via the extensive [FileExplorer API](docs/file_explorer.md).
* Multilingual support.
* And much, much more.

## Getting Started

### System Requirements
The front end of this website is developed based on html, CSS, JavaScript, and the back end is developed based on PHP. We use Nginx and PHP to build a website in Linux system and conduct preliminary tests.  
For the installation of Nginx and PHP, you can refer to the following tutorials:  
Linux: https://www.theserverside.com/blog/Coffee-Talk-Java-News-Stories-and-Opinions/Nginx-PHP-FPM-config-example  
Windows: https://dev.to/ilhamsabir/windows-10-nginx-php-2oef  
Mac: https://kittmedia.com/en/2021/macos-install-nginx-mysql-and-php-via-brew/  
### Setup your Server
First, Download or clone the latest software release. Transfer the files to a web server directory of your choosing.  
```bash
cd to web server directory of your choosing  
git clone https://github.com/dxh000130/Personal-Information-Management.git  
cp ./Personal-Information-Management/* web server directory of your choosing  
```
Then, Edit line 302 in /demo.html and line 10 in /server-side/config.php to change the URL address to the server's domain name or IP address.  
Windows:  
![image](https://user-images.githubusercontent.com/34475380/194522494-b65dc201-4074-4d69-8ce7-e5595dfbd4dd.png)  
Linux:  
```bash
nano ./demo.html #Maybe need use sudo
nano /server-side/config.php # Maybe need use sudo
```
Edit line 9 in /server-side/config.php and change projects_path to the actual location of the web page on the server.  
Windows:  
![image](https://user-images.githubusercontent.com/34475380/194522522-f2514f31-dfba-41d8-8eb2-101984615461.png)  
Linux:  
```bash
nano /server-side/config.php # Maybe need use sudo
```
That's all. Try accessing demo.html using a domain name or IP address. 

FileExplorer Options
--------------------

The `options` object passed to the FileExplorer class accepts the following options:

* group - An optional string containing a group name.  When specified, this must be a unique string that indicates a compatible widget backend to allow cross-widget drag-and-drop and cut/copy/paste to function properly.  When not specified, the instance receives a group name unique to the instance that disables the aforementioned cross-widget features.
* alwaysfocused - A boolean that indicates whether or not the widget's appearance never loses focus (Default is false).  This only affects visual appearance and does not stop onfocus/onblur event callbacks from firing.
* capturebrowser - A boolean that indicates whether or not to capture the hardward back and forward mouse buttons when the mouse is hovering over the widget (Default is false).  Read the 'Known Limitations' section before enabling this feature.
* messagetimeout - An integer containing the number of milliseconds to show short-lived messages in the status bar (Default is 2000).
* displayunits - A string containing one of 'iec_windows', 'iec_formal', or 'si' to specify what units to use when displaying file sizes to the user (Default is 'iec_windows').
* adjustprecision - A boolean indicating whether or not to adjust the final precision when displaying file sizes to the user (Default is true).
* initpath - An optional array of arrays containing the initial path segments to set.  Each path segment is an array consisting of `[id, value, attrs]`.  This path is passed to [FileExplorer.SetPath](docs/file_explorer.md#fileexplorer-setpath).
* onfocus(e) - An optional callback function that is called when the widget or one of its components receives focus.
	* e - The browser event object that triggered the event.
* onblur(e) - An optional callback function that is called when the widget loses focus.  This callback can be used to hide or `Destroy()` the widget instance if it is used in a popup overlay.  Note that `onblur` will not fire if the window itself loses focus - only if the widget loses focus to another element on the page.
	* e - The browser event object that triggered the event.
* onrefresh(folder, required) - An optional callback function that is called when a folder refresh should happen.
	* folder - A Folder instance to refresh.
	* refresh - A boolean indicating that the refresh is required for the widget to function properly.
* onselchanged(folder, selecteditemsmap, numselecteditems) - An optional callback function that is called whenever the user changes the item selections.  Rarely used.
	* folder - The current Folder instance.
	* selecteditemsmap - The internal selecteditemsmap object.  Do not modify.
	* numselecteditems - An integer containing the number of selected items in the selecteditemsmap.
* onrename(renamed, folder, entry, newname) - An optional callback function that is called when the user renames an item.
	* renamed(entry) - A callback function to call upon completion of renaming or on failure.
	* folder - The Folder in which the entry to rename is in.
	* entry - The entry to rename.
	* newname - A string containing the name that was entered by the user.
* onopenfile(folder, entry) - An optional callback function that is called when the user double-clicks/taps on an item.
	* folder - The Folder that the entry to open is in.
	* entry - The entry to open.
* tools - An optional object containing key-value pairs where the value is a boolean that indicates whether or not to show the tool and the keys are:  new_folder, new_file, upload, download, copy, paste, cut, delete, item_checkboxes.  Most toolbar tools show up automatically when an onhandler is defined and override any "don't show" setting.  The only tool that doesn't show as a result of a handler being defined is 'item_checkboxes'.
* onnewfolder(created, folder) - An optional callback function that is called when the user clicks the New Folder icon or presses Ctrl + Ins.
	* created(success) - A callback function to call upon completion of creating a new folder or on failure.
	* folder - The Folder in which to create a new folder.
* onnewfile(created, folder) - An optional callback function that is called when the user clicks the New File icon or presses Ins.
	* created(success) - A callback function to call upon completion of creating a new file or on failure.
	* folder - The Folder in which to create a new file.
* oninitupload(startupload, fileinfo, queuestarted) - An optional callback function that is called when the user clicks the Upload icon or presses Ctrl + U.
	* startupload(fileinfo, process) - A callback function to call upon completion of initializing the upload or on failure.  The 'process' option can be used to tell the callback to process the upload itself or skip it if it was handled in the callback (e.g. creating an empty directory).  When 'process' is a string, it is treated as an error message to display to the user.
	* fileinfo - The file information object of the file to initialize for uploading.
	* queuestarted - An integer containing a UNIX timestamp of when the current upload queue was started.  Can be useful to pass to a server that can use the value to copy files that are going to be overwritten to a recycling bin folder before the overwrite happens.
* onfinishedupload(finalize, fileinfo) - An optional callback function that is called when the upload finishes successfully.  Can be used to finalize an uploaded file on a server (e.g. move from a temporary directory to its final location).
	* finalize(success, entry) - A callback function to call upon completion of finalizing the upload or on failure.  The 'entry' parameter is an optional Folder entry to set in the current folder.
	* fileinfo - The file information object of the file upload to finalize.
* onuploaderror(fileinfo, e) - An optional callback function that is called when the upload fails.  Can be used to remove an associated temporary file that was created during initialization.
	* fileinfo - The file information object of the file upload that had an error.
	* e - An optional error event object (not all failure conditions include this parameter).
* concurrentuploads - An integer containing the maximum number of concurrent uploads to perform simultaneously (Default is 4).
* oninitdownload(startdownload, folder, ids, entries) - An optional callback function that is called when the user clicks the Download icon.  Since browsers don't do well with downloading a lot of individual files, it is recommended that folders and files be sent from the server in a single, compressed file format (e.g. ZIP).
	* startdownload(xhroptions) - A callback function to call upon completion of preparing the download or on failure.  When an object is passed for xhroptions, it must be a set of options compatible with [PrepareXHR](docs/prepare_xhr.md).
	* folder - The Folder in which the ids are located.
	* ids - An array containing the selected entry IDs to download.
	* entries - An array containing the selected entries to download.
* ondownloadstarted(options) - An optional callback function that is called when the download has started.
	* options - The xhroptions object passed to startdownload().
* ondownloaderror(options) - An optional callback function to that is called if the download failed to start.
	* options - The xhroptions object passed to startdownload().
* ondownloadurl(result, folder, ids, name) - An optional synchronous callback function that is called when a user starts a drag operation or cuts/copies one or more selected items.  This applies a DownloadURL MIME type to the content.  This allows for dragging/pasting folders and files out of the browser and onto the desktop.  Currently only supported in Chromium browsers and may not use asynchronous methods like AJAX to calculate the URL.
	* result - An object that should have 'name' and 'url' strings assigned to it.
	* folder - The Folder in which the ids are located.
	* ids - An array containing the selected entry IDs to download.
	* entry - The first folder entry in the associated IDs list.  Can be used to set the 'name' of the file.
* oncopy(copied, srcpath, srcids, destfolder) - An optional callback function that is called when the user copies folders/files from one folder to another.
	* copied(success, entries) - A callback function to call upon completion of copying the folders and files or on failure.  The 'entries' should contain the successfully copied entries to add regardless of success/failure.
	* srcpath - An array of arrays representing the source path of the IDs.
	* srcids - An array of entry IDs in the source path to copy.
	* destfolder - A Folder to which the entries are to be copied.  Note that the destination folder may be the same as the source, in which case the server may choose to copy the files to new files with different names or reject the request.
* onmove(moved, srcpath, srcids, destfolder) - An optional callback function that is called when the user moves folders/files from one folder to another.
	* moved(success, entries) - A callback function to call upon completion of moving the folders and files or on failure.  The 'entries' should contain the successfully moved entries to add regardless of success/failure.
	* srcpath - An array of arrays representing the source path of the IDs.
	* srcids - An array of entry IDs in the source path to move.
	* destfolder - A Folder to which the entries are to be moved.  Note that the destination folder may be the same as the source, in which case the server should reject the request.
* ondelete(deleted, folder, ids, entries, recycle) - An optional callback function that is called when the user deletes folders/files.
	* deleted(success) - A callback function to call upon completion of the deletion operation.
	* folder - The Folder in which the ids/entries are located.
	* ids - An array containing the selected entry IDs to delete.
	* entries - An array containing the selected entries to delete.
	* recycle - A boolean hinting at whether to send items to a recycling bin (Delete) or permanently delete them (Shift + Delete).  The server is free to ignore this parameter and do whatever makes the most sense.
* langmap - An object containing translation strings.  Support exists for most of the user interface (Default is an empty object).

The [Live Demo](https://cubiclesoft.com/demos/js-fileexplorer/demo.html) utilizes nearly all of the available callbacks.  The [Live Demo source code](demo.html) was designed so as keep this documentation to a minimum and to provide decent example usage without incurring AJAX calls.

Class Documentation
-------------------

* [FileExplorer class](docs/file_explorer.md) - The core FileExplorer class + tools.  Does most of the heavy-lifting.  Exported as `window.FileExplorer`.
* [DebounceAttributes class](docs/debounce_attributes.md) - Debounces/throttles attribute changes.  More efficient than most debounce functions that rely on events.
* [PrepareXHR class](docs/prepare_xhr.md) - A basic and convenient wrapper around a XMLHttpRequest (XHR) object.
* [ImageLoader class](docs/image_loader.md) - A multi-queue delayed image loader that only loads images when it is told to.  Also exported as `window.FileExplorer.ImageLoader` for reusability purposes.
* [PopupMenu class](docs/popup_menu.md) - Displays a popup menu of items.  Used for Recent Locations and path segment expansion.  Full keyboard, mouse, and touch support.  Also exported as `window.FileExplorer.PopupMenu` for reusability purposes.
* [TextareaOverlay class](docs/textarea_overlay.md) - Displays a positionable textarea with optional text with text selection.  Full keyboard, mouse, and touch support.  Also exported as `window.FileExplorer.TextareaOverlay` for reusability purposes.
* [Folder class](docs/folder.md) - Tracks the contents of a single folder in the mapped folders of the FileExplorer class.  The Folder class cannot be instantiated except from within the FileExplorer but instances of this class can be accessed primarily via callbacks from FileExplorer.
* [FileExplorerFSHelper class](docs/file_explorer_fs_helper.md) - PHP server-side helper class to simplify interacting with server-local, physical file systems.

Directory Structure
------
    .
    ├── artwork     # The
        ├── Controllers          # 
    ├── docs        # 
    ├── file-exploer                 # 
    ├── server-side                 # 
    ├── README.md                 # 
    ├── demo.html                 # 
    ├── package.json                 # 
	
Contributing
------

 
