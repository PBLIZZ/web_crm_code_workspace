# We'll write the export script to the specified location: /Users/peterjamesblizzard/projects/Hostinger_sites/export_chats.py
import json
import os

# Define paths
data_folder = "/Users/peterjamesblizzard/Downloads/copyChatGPT0525"
output_folder = os.path.join(data_folder, "exported_chats")
input_file = os.path.join(data_folder, "conversations.json")

# Create output folder if it doesn't exist
os.makedirs(output_folder, exist_ok=True)

# Load the conversation data
with open(input_file, "r", encoding="utf-8") as f:
    conversations = json.load(f)

# Export each conversation
for i, convo in enumerate(conversations):
    messages = convo.get("mapping", {})
    
    # Sort messages by creation time
    sorted_messages = sorted(
    [
        m for m in messages.values()
        if m.get("message") and m["message"].get("create_time")
    ],
    key=lambda x: x["message"]["create_time"]
)

    chat_text = ""
    for msg in sorted_messages:
        role = msg["message"]["author"]["role"]
        content = msg["message"]["content"].get("parts", [""])[0]
        chat_text += f"{role.upper()}:\\n{content}\\n\\n"

    # Use title or fallback to "chat_N.txt"
    title = convo.get("title", f"chat_{i+1}")
    safe_title = "".join(c for c in title if c.isalnum() or c in (' ', '_')).rstrip()
    filename = f"{safe_title[:50].strip().replace(' ', '_')}.txt"

    with open(os.path.join(output_folder, filename), "w", encoding="utf-8") as out_file:
        out_file.write(chat_text)

print(f"✅ Exported {len(conversations)} conversations to: {output_folder}")


# Save the script
script_path = '/Users/peterjamesblizzard/projects/Hostinger_sites/export_chats.py'
with open(script_path, 'w') as file:
    file.write(script_content)

script_path
