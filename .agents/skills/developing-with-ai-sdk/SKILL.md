---
name: developing-with-ai-sdk
description: Builds AI agents, generates text, chat, images, audio, embeddings, etc using Laravel AI SDK.
---

# Laravel AI SDK

Unified API for AI (agents, images, audio, embeddings, etc).

## Documentation
**CRITICAL**: Package is new/evolving. **DO NOT GUESS SYNTAX.**
- ALWAYS run `search-docs` first.
- Use broad queries (e.g. `['agents', 'streaming']`).


## Search Guidelines
- Use broad queries: `['agents', 'streaming']`, `['text generation']`, `['structured output']`.
- Do NOT include package names in queries (e.g. just "embeddings", not "laravel ai embeddings").

## Workflow / Capabilities
- **Text/Chat**: Agent + `Promptable`.
- **Chat History**: Agent + `Conversational` or `RemembersConversations`.
- **Structured Output**: Agent + `HasStructuredOutput`.
- **Images**: `Image::of()->generate()`.
- **Audio**: `Audio::of()->generate()`.
- **Transcription**: `Transcription::fromPath()->generate()`.
- **Embeddings**: `Embeddings::for()->generate()`.
- **Reranking**: `Reranking::of()->rerank()`.
- **Files**: `Document::fromPath()->put()`.
- **vectors**: `Stores::create()`.
